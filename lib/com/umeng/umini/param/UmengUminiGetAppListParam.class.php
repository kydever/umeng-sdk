<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUminiGetAppListParam
{
    private $sdkStdResult = [];

    /**
     * @return 页码
     */
    public function getPageIndex()
    {
        return $this->sdkStdResult['pageIndex'];
    }

    /**
     * 设置页码
     * @param int $pageIndex
     *                       参数示例：<pre>1</pre>
     *                       此参数为可选参数
     *
     * 默认值：<pre>1</pre>
     */
    public function setPageIndex($pageIndex)
    {
        $this->sdkStdResult['pageIndex'] = $pageIndex;
    }

    /**
     * @return 每页记录数
     */
    public function getPageSize()
    {
        return $this->sdkStdResult['pageSize'];
    }

    /**
     * 设置每页记录数.
     * @param int $pageSize
     *                      参数示例：<pre>30</pre>
     *                      此参数为可选参数
     *
     * 默认值：<pre>30</pre>
     */
    public function setPageSize($pageSize)
    {
        $this->sdkStdResult['pageSize'] = $pageSize;
    }

    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
