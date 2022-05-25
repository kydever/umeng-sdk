<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
include_once 'com/umeng/uapp/param/UmengUappAccountInfo.class.php';

class UmengUappGetNewAccountsResult
{
    private $newAccountInfo;

    private $stdResult;

    private $arrayResult;

    /**
     * @return UmengUappAccountInfo[]
     */
    public function getNewAccountInfo()
    {
        return $this->newAccountInfo;
    }

    /**
     * 设置UmengUappAccountInfo[].
     * @param array include @see UmengUappAccountInfo[] $newAccountInfo
     *
     * 此参数必填     */
    public function setNewAccountInfo(UmengUappAccountInfo $newAccountInfo)
    {
        $this->newAccountInfo = $newAccountInfo;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('newAccountInfo', $this->stdResult)) {
            $newAccountInfoResult = $this->stdResult->{'newAccountInfo'};
            $object = json_decode(json_encode($newAccountInfoResult), true);
            $this->newAccountInfo = [];
            for ($i = 0; $i < count($object); ++$i) {
                $arrayobject = new ArrayObject($object[$i]);
                $UmengUappAccountInfoResult = new UmengUappAccountInfo();
                $UmengUappAccountInfoResult->setArrayResult($arrayobject);
                $this->newAccountInfo[$i] = $UmengUappAccountInfoResult;
            }
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('newAccountInfo', $this->arrayResult)) {
            $newAccountInfoResult = $arrayResult['newAccountInfo'];
            $this->newAccountInfo = new UmengUappAccountInfo();
            $this->newAccountInfo->setStdResult($newAccountInfoResult);
        }
    }
}
