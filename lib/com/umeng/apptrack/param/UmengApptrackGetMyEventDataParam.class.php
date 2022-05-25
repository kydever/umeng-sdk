<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengApptrackGetMyEventDataParam
{
    private $sdkStdResult = [];

    /**
     * @return 计划id
     */
    public function getPlanId()
    {
        return $this->sdkStdResult['planId'];
    }

    /**
     * 设置计划id.
     * @param Long $planId
     *                     参数示例：<pre>从用户计划列表接口获取</pre>
     * 此参数必填     */
    public function setPlanId($planId)
    {
        $this->sdkStdResult['planId'] = $planId;
    }

    /**
     * @return 单元id
     */
    public function getUnitId()
    {
        return $this->sdkStdResult['unitId'];
    }

    /**
     * 设置单元id.
     * @param Long $unitId
     *                     参数示例：<pre>从监测单元列表接口获取</pre>
     *                     此参数为可选参数
     *
     * 默认值：<pre>null</pre>
     */
    public function setUnitId($unitId)
    {
        $this->sdkStdResult['unitId'] = $unitId;
    }

    /**
     * @return 查询日期
     */
    public function getQueryDate()
    {
        return $this->sdkStdResult['queryDate'];
    }

    /**
     * 设置查询日期
     * @param string $queryDate
     *                          参数示例：<pre>2018-12-19</pre>
     * 此参数必填     */
    public function setQueryDate($queryDate)
    {
        $this->sdkStdResult['queryDate'] = $queryDate;
    }

    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
