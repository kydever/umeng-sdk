<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUminiRefererIndicatorDTO extends SDKDomain
{
    private $dateTime;

    private $newUser;

    private $activeUser;

    private $launch;

    private $visitTimes;

    private $onceDuration;

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
     * @return 新增用户
     */
    public function getNewUser()
    {
        return $this->newUser;
    }

    /**
     * 设置新增用户.
     * @param Long $newUser
     *                      参数示例：<pre></pre>
     * 此参数必填     */
    public function setNewUser($newUser)
    {
        $this->newUser = $newUser;
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
     * @param Long $activeUser
     *                         参数示例：<pre></pre>
     * 此参数必填     */
    public function setActiveUser($activeUser)
    {
        $this->activeUser = $activeUser;
    }

    /**
     * @return 打开次数
     */
    public function getLaunch()
    {
        return $this->launch;
    }

    /**
     * 设置打开次数.
     * @param Long $launch
     *                     参数示例：<pre></pre>
     * 此参数必填     */
    public function setLaunch($launch)
    {
        $this->launch = $launch;
    }

    /**
     * @return 页面访问次数
     */
    public function getVisitTimes()
    {
        return $this->visitTimes;
    }

    /**
     * 设置页面访问次数.
     * @param Long $visitTimes
     *                         参数示例：<pre></pre>
     * 此参数必填     */
    public function setVisitTimes($visitTimes)
    {
        $this->visitTimes = $visitTimes;
    }

    /**
     * @return 次均停留时长
     */
    public function getOnceDuration()
    {
        return $this->onceDuration;
    }

    /**
     * 设置次均停留时长
     * @param string $onceDuration
     *                             参数示例：<pre></pre>
     * 此参数必填     */
    public function setOnceDuration($onceDuration)
    {
        $this->onceDuration = $onceDuration;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('dateTime', $this->stdResult)) {
            $this->dateTime = $this->stdResult->{'dateTime'};
        }
        if (array_key_exists('newUser', $this->stdResult)) {
            $this->newUser = $this->stdResult->{'newUser'};
        }
        if (array_key_exists('activeUser', $this->stdResult)) {
            $this->activeUser = $this->stdResult->{'activeUser'};
        }
        if (array_key_exists('launch', $this->stdResult)) {
            $this->launch = $this->stdResult->{'launch'};
        }
        if (array_key_exists('visitTimes', $this->stdResult)) {
            $this->visitTimes = $this->stdResult->{'visitTimes'};
        }
        if (array_key_exists('onceDuration', $this->stdResult)) {
            $this->onceDuration = $this->stdResult->{'onceDuration'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('dateTime', $this->arrayResult)) {
            $this->dateTime = $arrayResult['dateTime'];
        }
        if (array_key_exists('newUser', $this->arrayResult)) {
            $this->newUser = $arrayResult['newUser'];
        }
        if (array_key_exists('activeUser', $this->arrayResult)) {
            $this->activeUser = $arrayResult['activeUser'];
        }
        if (array_key_exists('launch', $this->arrayResult)) {
            $this->launch = $arrayResult['launch'];
        }
        if (array_key_exists('visitTimes', $this->arrayResult)) {
            $this->visitTimes = $arrayResult['visitTimes'];
        }
        if (array_key_exists('onceDuration', $this->arrayResult)) {
            $this->onceDuration = $arrayResult['onceDuration'];
        }
    }
}
