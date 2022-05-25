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

class UmengUappEventGetUniqueUsersResult
{
    private $uniqueUsers;

    private $stdResult;

    private $arrayResult;

    /**
     * @return
     */
    public function getUniqueUsers()
    {
        return $this->uniqueUsers;
    }

    /**
     * 设置.
     * @param array include @see UmengUappDateCountInfo[] $uniqueUsers
     *
     * 此参数必填     */
    public function setUniqueUsers(UmengUappDateCountInfo $uniqueUsers)
    {
        $this->uniqueUsers = $uniqueUsers;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('uniqueUsers', $this->stdResult)) {
            $uniqueUsersResult = $this->stdResult->{'uniqueUsers'};
            $object = json_decode(json_encode($uniqueUsersResult), true);
            $this->uniqueUsers = [];
            for ($i = 0; $i < count($object); ++$i) {
                $arrayobject = new ArrayObject($object[$i]);
                $UmengUappDateCountInfoResult = new UmengUappDateCountInfo();
                $UmengUappDateCountInfoResult->setArrayResult($arrayobject);
                $this->uniqueUsers[$i] = $UmengUappDateCountInfoResult;
            }
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('uniqueUsers', $this->arrayResult)) {
            $uniqueUsersResult = $arrayResult['uniqueUsers'];
            $this->uniqueUsers = new UmengUappDateCountInfo();
            $this->uniqueUsers->setStdResult($uniqueUsersResult);
        }
    }
}
