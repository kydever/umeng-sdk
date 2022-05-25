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

class UmengUappGetNewUsersByChannelOrVersionResult
{
    private $newUserInfo;

    private $stdResult;

    private $arrayResult;

    /**
     * @return
     */
    public function getNewUserInfo()
    {
        return $this->newUserInfo;
    }

    /**
     * 设置.
     * @param array include @see UmengUappCountData[] $newUserInfo
     *
     * 此参数必填     */
    public function setNewUserInfo(UmengUappCountData $newUserInfo)
    {
        $this->newUserInfo = $newUserInfo;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('newUserInfo', $this->stdResult)) {
            $newUserInfoResult = $this->stdResult->{'newUserInfo'};
            $object = json_decode(json_encode($newUserInfoResult), true);
            $this->newUserInfo = [];
            for ($i = 0; $i < count($object); ++$i) {
                $arrayobject = new ArrayObject($object[$i]);
                $UmengUappCountDataResult = new UmengUappCountData();
                $UmengUappCountDataResult->setArrayResult($arrayobject);
                $this->newUserInfo[$i] = $UmengUappCountDataResult;
            }
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('newUserInfo', $this->arrayResult)) {
            $newUserInfoResult = $arrayResult['newUserInfo'];
            $this->newUserInfo = new UmengUappCountData();
            $this->newUserInfo->setStdResult($newUserInfoResult);
        }
    }
}
