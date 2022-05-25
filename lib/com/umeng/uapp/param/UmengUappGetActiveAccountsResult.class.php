<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
include_once 'com/umeng/uapp/param/UmengUappActiveAccountInfo.class.php';

class UmengUappGetActiveAccountsResult
{
    private $activeAccountInfo;

    private $stdResult;

    private $arrayResult;

    /**
     * @return
     */
    public function getActiveAccountInfo()
    {
        return $this->activeAccountInfo;
    }

    /**
     * 设置.
     * @param array include @see UmengUappActiveAccountInfo[] $activeAccountInfo
     *
     * 此参数必填     */
    public function setActiveAccountInfo(UmengUappActiveAccountInfo $activeAccountInfo)
    {
        $this->activeAccountInfo = $activeAccountInfo;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('activeAccountInfo', $this->stdResult)) {
            $activeAccountInfoResult = $this->stdResult->{'activeAccountInfo'};
            $object = json_decode(json_encode($activeAccountInfoResult), true);
            $this->activeAccountInfo = [];
            for ($i = 0; $i < count($object); ++$i) {
                $arrayobject = new ArrayObject($object[$i]);
                $UmengUappActiveAccountInfoResult = new UmengUappActiveAccountInfo();
                $UmengUappActiveAccountInfoResult->setArrayResult($arrayobject);
                $this->activeAccountInfo[$i] = $UmengUappActiveAccountInfoResult;
            }
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('activeAccountInfo', $this->arrayResult)) {
            $activeAccountInfoResult = $arrayResult['activeAccountInfo'];
            $this->activeAccountInfo = new UmengUappActiveAccountInfo();
            $this->activeAccountInfo->setStdResult($activeAccountInfoResult);
        }
    }
}
