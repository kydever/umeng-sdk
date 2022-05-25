<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
include_once 'com/umeng/umini/param/UmengUminiEventDTO.class.php';

class UmengUminiBatchCreateEventParam
{
    private $sdkStdResult = [];

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

    /**
     * @return 事件列表
     */
    public function getEventList()
    {
        return $this->sdkStdResult['eventList'];
    }

    /**
     * 设置事件列表.
     * @param array include @see UmengUminiEventDTO[] $eventList
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setEventList(UmengUminiEventDTO $eventList)
    {
        $this->sdkStdResult['eventList'] = $eventList;
    }

    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
