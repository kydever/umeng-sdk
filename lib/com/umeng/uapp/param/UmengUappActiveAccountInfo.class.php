<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUappActiveAccountInfo extends SDKDomain
{
    private $date;

    private $activeUser;

    private $activeAccount;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 统计日期
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * 设置统计日期
     * @param string $date
     *                     参数示例：<pre>2018-01-01</pre>
     * 此参数必填     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return 活跃用户
     */
    public function getActiveUser()
    {
        return $this->activeUser;
    }

    /**
     * 设置活跃用户.
     * @param int $activeUser
     *                        参数示例：<pre></pre>
     * 此参数必填     */
    public function setActiveUser($activeUser)
    {
        $this->activeUser = $activeUser;
    }

    /**
     * @return 活跃账号
     */
    public function getActiveAccount()
    {
        return $this->activeAccount;
    }

    /**
     * 设置活跃账号.
     * @param int $activeAccount
     *                           参数示例：<pre></pre>
     * 此参数必填     */
    public function setActiveAccount($activeAccount)
    {
        $this->activeAccount = $activeAccount;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('date', $this->stdResult)) {
            $this->date = $this->stdResult->{'date'};
        }
        if (array_key_exists('activeUser', $this->stdResult)) {
            $this->activeUser = $this->stdResult->{'activeUser'};
        }
        if (array_key_exists('activeAccount', $this->stdResult)) {
            $this->activeAccount = $this->stdResult->{'activeAccount'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('date', $this->arrayResult)) {
            $this->date = $arrayResult['date'];
        }
        if (array_key_exists('activeUser', $this->arrayResult)) {
            $this->activeUser = $arrayResult['activeUser'];
        }
        if (array_key_exists('activeAccount', $this->arrayResult)) {
            $this->activeAccount = $arrayResult['activeAccount'];
        }
    }
}
