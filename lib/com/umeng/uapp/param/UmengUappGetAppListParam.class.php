<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUappGetAppListParam
{
    private $sdkStdResult = [];

    /**
     * @return 页号，从1开始
     */
    public function getPage()
    {
        return $this->sdkStdResult['page'];
    }

    /**
     * 设置页号，从1开始.
     * @param int $page
     *                  参数示例：<pre>1</pre>
     *                  此参数为可选参数
     *
     * 默认值：<pre></pre>
     */
    public function setPage($page)
    {
        $this->sdkStdResult['page'] = $page;
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
     *                     参数示例：<pre>10</pre>
     *                     此参数为可选参数
     *
     * 默认值：<pre></pre>
     */
    public function setPerPage($perPage)
    {
        $this->sdkStdResult['perPage'] = $perPage;
    }

    /**
     * @return
     */
    public function getAccessToken()
    {
        return $this->sdkStdResult['accessToken'];
    }

    /**
     * 设置.
     * @param string $accessToken
     *                            参数示例：<pre></pre>
     *                            此参数为可选参数
     *
     * 默认值：<pre></pre>
     */
    public function setAccessToken($accessToken)
    {
        $this->sdkStdResult['accessToken'] = $accessToken;
    }

    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
