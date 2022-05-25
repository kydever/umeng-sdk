<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUappEventParamGetDataParam
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
     * @return 查询起始日期
     */
    public function getStartDate()
    {
        return $this->sdkStdResult['startDate'];
    }

    /**
     * 设置查询起始日期
     * @param string $startDate
     *                          参数示例：<pre>2018-01-01</pre>
     * 此参数必填     */
    public function setStartDate($startDate)
    {
        $this->sdkStdResult['startDate'] = $startDate;
    }

    /**
     * @return 查询截止日期
     */
    public function getEndDate()
    {
        return $this->sdkStdResult['endDate'];
    }

    /**
     * 设置查询截止日期
     * @param string $endDate
     *                        参数示例：<pre>2018-01-01</pre>
     * 此参数必填     */
    public function setEndDate($endDate)
    {
        $this->sdkStdResult['endDate'] = $endDate;
    }

    /**
     * @return 自定义事件名称（通过umeng.uapp.event.list获取）
     */
    public function getEventName()
    {
        return $this->sdkStdResult['eventName'];
    }

    /**
     * 设置自定义事件名称（通过umeng.uapp.event.list获取）.
     * @param string $eventName
     *                          参数示例：<pre></pre>
     * 此参数必填     */
    public function setEventName($eventName)
    {
        $this->sdkStdResult['eventName'] = $eventName;
    }

    /**
     * @return 自定义事件参数名称（通过umeng.uapp.event.param.list获取）
     */
    public function getEventParamName()
    {
        return $this->sdkStdResult['eventParamName'];
    }

    /**
     * 设置自定义事件参数名称（通过umeng.uapp.event.param.list获取）.
     * @param string $eventParamName
     *                               参数示例：<pre></pre>
     * 此参数必填     */
    public function setEventParamName($eventParamName)
    {
        $this->sdkStdResult['eventParamName'] = $eventParamName;
    }

    /**
     * @return 自定义参数值名称（通过umeng.uapp.event.param.getValueList获取）
     */
    public function getParamValueName()
    {
        return $this->sdkStdResult['paramValueName'];
    }

    /**
     * 设置自定义参数值名称（通过umeng.uapp.event.param.getValueList获取）.
     * @param string $paramValueName
     *                               参数示例：<pre></pre>
     * 此参数必填     */
    public function setParamValueName($paramValueName)
    {
        $this->sdkStdResult['paramValueName'] = $paramValueName;
    }

    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
