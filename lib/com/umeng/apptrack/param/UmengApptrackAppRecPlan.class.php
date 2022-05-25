<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengApptrackAppRecPlan extends SDKDomain
{
    private $planId;

    private $planName;

    private $startDay;

    private $endDay;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 计划Id
     */
    public function getPlanId()
    {
        return $this->planId;
    }

    /**
     * 设置计划Id.
     * @param int $planId
     *                    参数示例：<pre></pre>
     * 此参数必填     */
    public function setPlanId($planId)
    {
        $this->planId = $planId;
    }

    /**
     * @return 计划名称
     */
    public function getPlanName()
    {
        return $this->planName;
    }

    /**
     * 设置计划名称.
     * @param string $planName
     *                         参数示例：<pre></pre>
     * 此参数必填     */
    public function setPlanName($planName)
    {
        $this->planName = $planName;
    }

    /**
     * @return 计划开始日期
     */
    public function getStartDay()
    {
        return $this->startDay;
    }

    /**
     * 设置计划开始日期
     * @param string $startDay
     *                         参数示例：<pre></pre>
     * 此参数必填     */
    public function setStartDay($startDay)
    {
        $this->startDay = $startDay;
    }

    /**
     * @return 计划结束日期
     */
    public function getEndDay()
    {
        return $this->endDay;
    }

    /**
     * 设置计划结束日期
     * @param string $endDay
     *                       参数示例：<pre></pre>
     * 此参数必填     */
    public function setEndDay($endDay)
    {
        $this->endDay = $endDay;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('planId', $this->stdResult)) {
            $this->planId = $this->stdResult->{'planId'};
        }
        if (array_key_exists('planName', $this->stdResult)) {
            $this->planName = $this->stdResult->{'planName'};
        }
        if (array_key_exists('startDay', $this->stdResult)) {
            $this->startDay = $this->stdResult->{'startDay'};
        }
        if (array_key_exists('endDay', $this->stdResult)) {
            $this->endDay = $this->stdResult->{'endDay'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('planId', $this->arrayResult)) {
            $this->planId = $arrayResult['planId'];
        }
        if (array_key_exists('planName', $this->arrayResult)) {
            $this->planName = $arrayResult['planName'];
        }
        if (array_key_exists('startDay', $this->arrayResult)) {
            $this->startDay = $arrayResult['startDay'];
        }
        if (array_key_exists('endDay', $this->arrayResult)) {
            $this->endDay = $arrayResult['endDay'];
        }
    }
}
