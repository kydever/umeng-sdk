<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
include_once 'com/umeng/uapp/param/UmengUappParamValueInfo.class.php';

class UmengUappEventParamGetValueListResult
{
    private $paramInfos;

    private $stdResult;

    private $arrayResult;

    /**
     * @return
     */
    public function getParamInfos()
    {
        return $this->paramInfos;
    }

    /**
     * 设置.
     * @param array include @see UmengUappParamValueInfo[] $paramInfos
     *
     * 此参数必填     */
    public function setParamInfos(UmengUappParamValueInfo $paramInfos)
    {
        $this->paramInfos = $paramInfos;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('paramInfos', $this->stdResult)) {
            $paramInfosResult = $this->stdResult->{'paramInfos'};
            $object = json_decode(json_encode($paramInfosResult), true);
            $this->paramInfos = [];
            for ($i = 0; $i < count($object); ++$i) {
                $arrayobject = new ArrayObject($object[$i]);
                $UmengUappParamValueInfoResult = new UmengUappParamValueInfo();
                $UmengUappParamValueInfoResult->setArrayResult($arrayobject);
                $this->paramInfos[$i] = $UmengUappParamValueInfoResult;
            }
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('paramInfos', $this->arrayResult)) {
            $paramInfosResult = $arrayResult['paramInfos'];
            $this->paramInfos = new UmengUappParamValueInfo();
            $this->paramInfos->setStdResult($paramInfosResult);
        }
    }
}
