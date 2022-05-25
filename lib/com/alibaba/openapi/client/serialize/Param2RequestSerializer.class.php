<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/serialize/Serializer.php';
include_once 'com/alibaba/openapi/client/policy/DataProtocol.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/util/SDKDomainUtil.class.php';
class Param2RequestSerializer implements Serializer
{
    public function supportedContentType()
    {
        return DataProtocol::param2;
    }

    public function serialize($serializer)
    {
        $serializedResult = [];
        if ($serializer == null) {
            return $serializedResult;
        }
        $ref = new ReflectionObject($serializer);
        $sdkStdResultArray = null;
        foreach ($ref->getMethods() as $tempMethod) {
            $methodName = $tempMethod->name;
            if ($methodName == 'getSdkStdResult') {
                $sdkStdResultArray = $tempMethod->invoke($serializer);
            }
        }
        if ($sdkStdResultArray == null) {
            foreach ($ref->getMethods() as $tempMethod) {
                $methodName = $tempMethod->name;
                if (strpos($methodName, 'get') === 0 && $methodName != 'getSdkStdResult') {
                    $propertyName = substr($methodName, 3);
                    $propertyName = lcfirst($propertyName);
                    $resultValue = $tempMethod->invoke($serializer);
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
                        $resultJsonValue = json_encode($tempArray);
                        $serializedResult[$propertyName] = $resultJsonValue;
                    } elseif (is_array($resultValue)) {
                        $resultJsonValue = json_encode($resultValue);
                        $serializedResult[$propertyName] = $resultJsonValue;
                    } else {
                        $serializedResult[$propertyName] = $resultValue;
                    }
                }
            }
        } else {
            foreach ($sdkStdResultArray as $k => $v) {
                $resultValue = $v;
                if (($resultValue instanceof DateTime)) {
                    $timeValue = $resultValue->getTimestamp();
                    $strTime = DateUtil::parseToString($timeValue);
                    $serializedResult[$k] = $strTime;
                } elseif (($resultValue instanceof ByteArray)) {
                    $tempValue = base64_encode($resultValue->getByteValue());
                    $serializedResult[$k] = $tempValue;
                } elseif (($resultValue instanceof SDKDomain)) {
                    $sdkDomainUtil = new SDKDomainUtil();
                    $tempArray = $sdkDomainUtil->generateSDKDomainArray($resultValue);
                    $resultJsonValue = json_encode($tempArray);
                    $serializedResult[$k] = $resultJsonValue;
                } elseif (is_array($resultValue)) {
                    $resultJsonValue = json_encode($resultValue);
                    $serializedResult[$k] = $resultJsonValue;
                } else {
                    $serializedResult[$k] = $resultValue;
                }
            }
        }
        return $serializedResult;
    }
}
