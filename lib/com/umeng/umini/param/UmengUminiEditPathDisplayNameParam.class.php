<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUminiEditPathDisplayNameParam
{
    private $sdkStdResult = [];

    /**
     * @return 数据源ID（AppKey）
     */
    public function getDataSourceId()
    {
        return $this->sdkStdResult['dataSourceId'];
    }

    /**
     * 设置数据源ID（AppKey）.
     * @param string $dataSourceId
     *                             参数示例：<pre></pre>
     * 此参数必填     */
    public function setDataSourceId($dataSourceId)
    {
        $this->sdkStdResult['dataSourceId'] = $dataSourceId;
    }

    /**
     * @return 页面别名
     */
    public function getDisplayName()
    {
        return $this->sdkStdResult['displayName'];
    }

    /**
     * 设置页面别名.
     * @param string $displayName
     *                            参数示例：<pre></pre>
     * 此参数必填     */
    public function setDisplayName($displayName)
    {
        $this->sdkStdResult['displayName'] = $displayName;
    }

    /**
     * @return 页面URL地址
     */
    public function getPath()
    {
        return $this->sdkStdResult['path'];
    }

    /**
     * 设置页面URL地址
     * @param string $path
     *                     参数示例：<pre></pre>
     * 此参数必填     */
    public function setPath($path)
    {
        $this->sdkStdResult['path'] = $path;
    }

    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
