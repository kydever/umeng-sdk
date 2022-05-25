<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
include_once 'com/umeng/uapp/param/UmengUappDateCountInfo.class.php';

class UmengUappEventParamGetDataResult
{
    private $paramValueData;

    private $stdResult;

    private $arrayResult;

    /**
     * @return
     */
    public function getParamValueData()
    {
        return $this->paramValueData;
    }

    /**
     * 设置.
     * @param array include @see UmengUappDateCountInfo[] $paramValueData
     *
     * 此参数必填     */
    public function setParamValueData(UmengUappDateCountInfo $paramValueData)
    {
        $this->paramValueData = $paramValueData;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('paramValueData', $this->stdResult)) {
            $paramValueDataResult = $this->stdResult->{'paramValueData'};
            $object = json_decode(json_encode($paramValueDataResult), true);
            $this->paramValueData = [];
            for ($i = 0; $i < count($object); ++$i) {
                $arrayobject = new ArrayObject($object[$i]);
                $UmengUappDateCountInfoResult = new UmengUappDateCountInfo();
                $UmengUappDateCountInfoResult->setArrayResult($arrayobject);
                $this->paramValueData[$i] = $UmengUappDateCountInfoResult;
            }
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('paramValueData', $this->arrayResult)) {
            $paramValueDataResult = $arrayResult['paramValueData'];
            $this->paramValueData = new UmengUappDateCountInfo();
            $this->paramValueData->setStdResult($paramValueDataResult);
        }
    }
}
