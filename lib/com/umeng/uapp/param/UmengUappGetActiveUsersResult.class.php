<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
include_once 'com/umeng/uapp/param/UmengUappCountData.class.php';

class UmengUappGetActiveUsersResult
{
    private $activeUserInfo;

    private $stdResult;

    private $arrayResult;

    /**
     * @return umeng.uapp.count.Data[]
     */
    public function getActiveUserInfo()
    {
        return $this->activeUserInfo;
    }

    /**
     * 设置umeng.uapp.count.Data[].
     * @param array include @see UmengUappCountData[] $activeUserInfo
     *
     * 此参数必填     */
    public function setActiveUserInfo(UmengUappCountData $activeUserInfo)
    {
        $this->activeUserInfo = $activeUserInfo;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('activeUserInfo', $this->stdResult)) {
            $activeUserInfoResult = $this->stdResult->{'activeUserInfo'};
            $object = json_decode(json_encode($activeUserInfoResult), true);
            $this->activeUserInfo = [];
            for ($i = 0; $i < count($object); ++$i) {
                $arrayobject = new ArrayObject($object[$i]);
                $UmengUappCountDataResult = new UmengUappCountData();
                $UmengUappCountDataResult->setArrayResult($arrayobject);
                $this->activeUserInfo[$i] = $UmengUappCountDataResult;
            }
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('activeUserInfo', $this->arrayResult)) {
            $activeUserInfoResult = $arrayResult['activeUserInfo'];
            $this->activeUserInfo = new UmengUappCountData();
            $this->activeUserInfo->setStdResult($activeUserInfoResult);
        }
    }
}
