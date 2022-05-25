<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUminiGetSharePageOverviewParam
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
     * @return 开始时间
     */
    public function getFromDate()
    {
        return $this->sdkStdResult['fromDate'];
    }

    /**
     * 设置开始时间.
     * @param string $fromDate
     *                         参数示例：<pre>2020-03-10</pre>
     * 此参数必填     */
    public function setFromDate($fromDate)
    {
        $this->sdkStdResult['fromDate'] = $fromDate;
    }

    /**
     * @return 结束时间
     */
    public function getToDate()
    {
        return $this->sdkStdResult['toDate'];
    }

    /**
     * 设置结束时间.
     * @param string $toDate
     *                       参数示例：<pre>2020-03-31</pre>
     * 此参数必填     */
    public function setToDate($toDate)
    {
        $this->sdkStdResult['toDate'] = $toDate;
    }

    /**
     * @return 时间颗粒度(day,7day,30day)
     */
    public function getTimeUnit()
    {
        return $this->sdkStdResult['timeUnit'];
    }

    /**
     * 设置时间颗粒度(day,7day,30day).
     * @param string $timeUnit
     *                         参数示例：<pre>day</pre>
     * 此参数必填     */
    public function setTimeUnit($timeUnit)
    {
        $this->sdkStdResult['timeUnit'] = $timeUnit;
    }

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

    /**
     * @return 排序指标(可选count,reflow,newUser,user)
     */
    public function getOrderBy()
    {
        return $this->sdkStdResult['orderBy'];
    }

    /**
     * 设置排序指标(可选count,reflow,newUser,user).
     * @param string $orderBy
     *                        参数示例：<pre>user</pre>
     *                        此参数为可选参数
     *
     * 默认值：<pre>user</pre>
     */
    public function setOrderBy($orderBy)
    {
        $this->sdkStdResult['orderBy'] = $orderBy;
    }

    /**
     * @return 排序方向(可选desc,asc)
     */
    public function getDirection()
    {
        return $this->sdkStdResult['direction'];
    }

    /**
     * 设置排序方向(可选desc,asc).
     * @param string $direction
     *                          参数示例：<pre>desc</pre>
     *                          此参数为可选参数
     *
     * 默认值：<pre>desc</pre>
     */
    public function setDirection($direction)
    {
        $this->sdkStdResult['direction'] = $direction;
    }

    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
