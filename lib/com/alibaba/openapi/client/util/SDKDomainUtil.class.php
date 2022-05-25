<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
class SDKDomainUtil
{
    public function generateSDKDomainArray($sdkDomain)
    {
        $serializedResult = [];
        $ref = new ReflectionObject($sdkDomain);
        foreach ($ref->getMethods() as $tempMethod) {
            $methodName = $tempMethod->name;
            if (strpos($methodName, 'get') === 0) {
                $propertyName = substr($methodName, 3);
                $propertyName = lcfirst($propertyName);
                $resultValue = $tempMethod->invoke($sdkDomain);
                if (($resultValue instanceof DateTime)) {
                    $timeValue = $resultValue->getTimestamp();
                    $strTime = DateUtil::parseToString($timeValue);

                    $serializedResult[$propertyName] = $strTime;
                } elseif (($resultValue instanceof ByteArray)) {
                    $tempValue = base64_encode($resultValue->getByteValue());
                    $serializedResult[$propertyName] = $tempValue;
                } elseif (($resultValue instanceof SDKDomain)) {
                    $sdkDomainUtil = new SDKDomainUtil();
                    $tempArray = $sdkDomainUtil->generateSDKDomainArray($resultValue);
                    $serializedResult[$propertyName] = $tempArray;
                } elseif (is_array($resultValue)) {
                    $sdkDomainSubArrayArray = [];
                    foreach ($resultValue as $tempValue) {
                        $result = processSDKDomain($tempValue);
                        array_push($sdkDomainSubArrayArray, $result);
                    }
                    $serializedResult[$propertyName] = $sdkDomainSubArrayArray;
                } else {
                    $serializedResult[$propertyName] = $resultValue;
                }
            }
        }
        return $serializedResult;
    }

    private function processSDKDomain($resultValue)
    {
        if (($resultValue instanceof DateTime)) {
            return $resultValue;
        }
        if (($resultValue instanceof ByteArray)) {
            return base64_encode($resultValue->getByteValue());
        }
        if (($resultValue instanceof SDKDomain)) {
            $sdkDomainSubArray = $this->generateSDKDomainArray($resultValue);
            return $tempValue;
        }
        if (is_array($resultValue)) {
            $sdkDomainSubArrayArray = [];
            foreach ($resultValue as $tempValue) {
                $result = processSDKDomain($tempValue);
                array_push($sdkDomainSubArrayArray, $result);
            }
            return $sdkDomainSubArrayArray;
        }
        return $resultValue;
    }
}
