<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
include_once 'com/umeng/uapp/param/UmengUappRetentionInfo.class.php';

class UmengUappGetRetentionsResult
{
    private $retentionInfo;

    private $stdResult;

    private $arrayResult;

    /**
     * @return
     */
    public function getRetentionInfo()
    {
        return $this->retentionInfo;
    }

    /**
     * 设置.
     * @param array include @see UmengUappRetentionInfo[] $retentionInfo
     *
     * 此参数必填     */
    public function setRetentionInfo(UmengUappRetentionInfo $retentionInfo)
    {
        $this->retentionInfo = $retentionInfo;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('retentionInfo', $this->stdResult)) {
            $retentionInfoResult = $this->stdResult->{'retentionInfo'};
            $object = json_decode(json_encode($retentionInfoResult), true);
            $this->retentionInfo = [];
            for ($i = 0; $i < count($object); ++$i) {
                $arrayobject = new ArrayObject($object[$i]);
                $UmengUappRetentionInfoResult = new UmengUappRetentionInfo();
                $UmengUappRetentionInfoResult->setArrayResult($arrayobject);
                $this->retentionInfo[$i] = $UmengUappRetentionInfoResult;
            }
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('retentionInfo', $this->arrayResult)) {
            $retentionInfoResult = $arrayResult['retentionInfo'];
            $this->retentionInfo = new UmengUappRetentionInfo();
            $this->retentionInfo->setStdResult($retentionInfoResult);
        }
    }
}
