<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUminiGetEventProvertyListParam
{
    private $sdkStdResult = [];

    /**
     * @return 事件
     */
    public function getEventName()
    {
        return $this->sdkStdResult['eventName'];
    }

    /**
     * 设置事件.
     * @param string $eventName
     *                          参数示例：<pre></pre>
     * 此参数必填     */
    public function setEventName($eventName)
    {
        $this->sdkStdResult['eventName'] = $eventName;
    }

    /**
     * @return 数据源id（AppKey）
     */
    public function getDataSourceId()
    {
        return $this->sdkStdResult['dataSourceId'];
    }

    /**
     * 设置数据源id（AppKey）.
     * @param string $dataSourceId
     *                             参数示例：<pre></pre>
     * 此参数必填     */
    public function setDataSourceId($dataSourceId)
    {
        $this->sdkStdResult['dataSourceId'] = $dataSourceId;
    }

    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
