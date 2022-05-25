<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmnegUminiTotalUserDTO extends SDKDomain
{
    private $dateTime;

    private $totalUser;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 时间
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * 设置时间.
     * @param string $dateTime
     *                         参数示例：<pre></pre>
     * 此参数必填     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;
    }

    /**
     * @return 累计用户数
     */
    public function getTotalUser()
    {
        return $this->totalUser;
    }

    /**
     * 设置累计用户数.
     * @param Long $totalUser
     *                        参数示例：<pre></pre>
     * 此参数必填     */
    public function setTotalUser($totalUser)
    {
        $this->totalUser = $totalUser;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('dateTime', $this->stdResult)) {
            $this->dateTime = $this->stdResult->{'dateTime'};
        }
        if (array_key_exists('totalUser', $this->stdResult)) {
            $this->totalUser = $this->stdResult->{'totalUser'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('dateTime', $this->arrayResult)) {
            $this->dateTime = $arrayResult['dateTime'];
        }
        if (array_key_exists('totalUser', $this->arrayResult)) {
            $this->totalUser = $arrayResult['totalUser'];
        }
    }
}
