<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUappGetDailyDataParam
{
    private $sdkStdResult = [];

    /**
     * @return 应用ID
     */
    public function getAppkey()
    {
        return $this->sdkStdResult['appkey'];
    }

    /**
     * 设置应用ID.
     * @param string $appkey
     *                       参数示例：<pre></pre>
     * 此参数必填     */
    public function setAppkey($appkey)
    {
        $this->sdkStdResult['appkey'] = $appkey;
    }

    /**
     * @return 查询日期
     */
    public function getDate()
    {
        return $this->sdkStdResult['date'];
    }

    /**
     * 设置查询日期
     * @param string $date
     *                     参数示例：<pre>2018-01-01</pre>
     * 此参数必填     */
    public function setDate($date)
    {
        $this->sdkStdResult['date'] = $date;
    }

    /**
     * @return 版本名称（选填，仅一次一个）
     */
    public function getVersion()
    {
        return $this->sdkStdResult['version'];
    }

    /**
     * 设置版本名称（选填，仅一次一个）.
     * @param string $version
     *                        参数示例：<pre></pre>
     *                        此参数为可选参数
     *
     * 默认值：<pre></pre>
     */
    public function setVersion($version)
    {
        $this->sdkStdResult['version'] = $version;
    }

    /**
     * @return 渠道名称（选填，仅一次一个）
     */
    public function getChannel()
    {
        return $this->sdkStdResult['channel'];
    }

    /**
     * 设置渠道名称（选填，仅一次一个）.
     * @param string $channel
     *                        参数示例：<pre></pre>
     *                        此参数为可选参数
     *
     * 默认值：<pre></pre>
     */
    public function setChannel($channel)
    {
        $this->sdkStdResult['channel'] = $channel;
    }

    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
