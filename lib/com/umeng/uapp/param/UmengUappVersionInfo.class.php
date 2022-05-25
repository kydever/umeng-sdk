<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUappVersionInfo extends SDKDomain
{
    private $date;

    private $totalUserRate;

    private $activeUser;

    private $newUser;

    private $totalUser;

    private $version;

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
     *                     参数示例：<pre></pre>
     * 此参数必填     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return 当前版本总用户数在总用户数中的比例
     */
    public function getTotalUserRate()
    {
        return $this->totalUserRate;
    }

    /**
     * 设置当前版本总用户数在总用户数中的比例.
     * @param float $totalUserRate
     *                             参数示例：<pre></pre>
     * 此参数必填     */
    public function setTotalUserRate($totalUserRate)
    {
        $this->totalUserRate = $totalUserRate;
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
     * @return 新增用户
     */
    public function getNewUser()
    {
        return $this->newUser;
    }

    /**
     * 设置新增用户.
     * @param int $newUser
     *                     参数示例：<pre></pre>
     * 此参数必填     */
    public function setNewUser($newUser)
    {
        $this->newUser = $newUser;
    }

    /**
     * @return 当前版本总用户数
     */
    public function getTotalUser()
    {
        return $this->totalUser;
    }

    /**
     * 设置当前版本总用户数.
     * @param int $totalUser
     *                       参数示例：<pre></pre>
     * 此参数必填     */
    public function setTotalUser($totalUser)
    {
        $this->totalUser = $totalUser;
    }

    /**
     * @return 版本号
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * 设置版本号.
     * @param string $version
     *                        参数示例：<pre></pre>
     * 此参数必填     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('date', $this->stdResult)) {
            $this->date = $this->stdResult->{'date'};
        }
        if (array_key_exists('totalUserRate', $this->stdResult)) {
            $this->totalUserRate = $this->stdResult->{'totalUserRate'};
        }
        if (array_key_exists('activeUser', $this->stdResult)) {
            $this->activeUser = $this->stdResult->{'activeUser'};
        }
        if (array_key_exists('newUser', $this->stdResult)) {
            $this->newUser = $this->stdResult->{'newUser'};
        }
        if (array_key_exists('totalUser', $this->stdResult)) {
            $this->totalUser = $this->stdResult->{'totalUser'};
        }
        if (array_key_exists('version', $this->stdResult)) {
            $this->version = $this->stdResult->{'version'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('date', $this->arrayResult)) {
            $this->date = $arrayResult['date'];
        }
        if (array_key_exists('totalUserRate', $this->arrayResult)) {
            $this->totalUserRate = $arrayResult['totalUserRate'];
        }
        if (array_key_exists('activeUser', $this->arrayResult)) {
            $this->activeUser = $arrayResult['activeUser'];
        }
        if (array_key_exists('newUser', $this->arrayResult)) {
            $this->newUser = $arrayResult['newUser'];
        }
        if (array_key_exists('totalUser', $this->arrayResult)) {
            $this->totalUser = $arrayResult['totalUser'];
        }
        if (array_key_exists('version', $this->arrayResult)) {
            $this->version = $arrayResult['version'];
        }
    }
}
