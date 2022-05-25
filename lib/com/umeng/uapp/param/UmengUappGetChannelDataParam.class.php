<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUappGetChannelDataParam
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
     * @return 每页显示数量（最大100）
     */
    public function getPerPage()
    {
        return $this->sdkStdResult['perPage'];
    }

    /**
     * 设置每页显示数量（最大100）.
     * @param int $perPage
     *                     参数示例：<pre></pre>
     *                     此参数为可选参数
     *
     * 默认值：<pre>10</pre>
     */
    public function setPerPage($perPage)
    {
        $this->sdkStdResult['perPage'] = $perPage;
    }

    /**
     * @return 页数
     */
    public function getPage()
    {
        return $this->sdkStdResult['page'];
    }

    /**
     * 设置页数.
     * @param int $page
     *                  参数示例：<pre></pre>
     *                  此参数为可选参数
     *
     * 默认值：<pre>1</pre>
     */
    public function setPage($page)
    {
        $this->sdkStdResult['page'] = $page;
    }

    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
