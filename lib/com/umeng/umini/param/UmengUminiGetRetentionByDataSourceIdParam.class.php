<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUminiGetRetentionByDataSourceIdParam
{
    private $sdkStdResult = [];

    /**
     * @return 数据源ID(appkey)
     */
    public function getDataSourceId()
    {
        return $this->sdkStdResult['dataSourceId'];
    }

    /**
     * 设置数据源ID(appkey).
     * @param string $dataSourceId
     *                             参数示例：<pre></pre>
     * 此参数必填     */
    public function setDataSourceId($dataSourceId)
    {
        $this->sdkStdResult['dataSourceId'] = $dataSourceId;
    }

    /**
     * @return 开始时间 yyyy-MM-dd
     */
    public function getFromDate()
    {
        return $this->sdkStdResult['fromDate'];
    }

    /**
     * 设置开始时间 yyyy-MM-dd.
     * @param string $fromDate
     *                         参数示例：<pre>2021-01-19</pre>
     * 此参数必填     */
    public function setFromDate($fromDate)
    {
        $this->sdkStdResult['fromDate'] = $fromDate;
    }

    /**
     * @return 结束时间 yyyy-MM-dd
     */
    public function getToDate()
    {
        return $this->sdkStdResult['toDate'];
    }

    /**
     * 设置结束时间 yyyy-MM-dd.
     * @param string $toDate
     *                       参数示例：<pre>2021-01-01</pre>
     * 此参数必填     */
    public function setToDate($toDate)
    {
        $this->sdkStdResult['toDate'] = $toDate;
    }

    /**
     * @return 时间颗粒度 day,week
     */
    public function getTimeUnit()
    {
        return $this->sdkStdResult['timeUnit'];
    }

    /**
     * 设置时间颗粒度 day,week.
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
     * 默认值：<pre></pre>
     */
    public function setPageIndex($pageIndex)
    {
        $this->sdkStdResult['pageIndex'] = $pageIndex;
    }

    /**
     * @return 每页条数
     */
    public function getPageSize()
    {
        return $this->sdkStdResult['pageSize'];
    }

    /**
     * 设置每页条数.
     * @param int $pageSize
     *                      参数示例：<pre>10</pre>
     *                      此参数为可选参数
     *
     * 默认值：<pre></pre>
     */
    public function setPageSize($pageSize)
    {
        $this->sdkStdResult['pageSize'] = $pageSize;
    }

    /**
     * @return 指标：新增用户（newuser） 活跃用户 activeUser
     */
    public function getIndicator()
    {
        return $this->sdkStdResult['indicator'];
    }

    /**
     * 设置指标：新增用户（newuser） 活跃用户 activeUser.
     * @param string $indicator
     *                          参数示例：<pre>activeUser</pre>
     *                          此参数为可选参数
     *
     * 默认值：<pre></pre>
     */
    public function setIndicator($indicator)
    {
        $this->sdkStdResult['indicator'] = $indicator;
    }

    /**
     * @return 数据类型：留存率（rate) 留存数（num)
     */
    public function getValueType()
    {
        return $this->sdkStdResult['valueType'];
    }

    /**
     * 设置数据类型：留存率（rate) 留存数（num).
     * @param string $valueType
     *                          参数示例：<pre>rate</pre>
     * 此参数必填     */
    public function setValueType($valueType)
    {
        $this->sdkStdResult['valueType'] = $valueType;
    }

    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
