<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUminiPropertyValueCountDTO extends SDKDomain
{
    private $count;

    private $propertyValue;

    private $countRatio;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 触发次数
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * 设置触发次数.
     * @param Long $count
     *                    参数示例：<pre></pre>
     * 此参数必填     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @return 属性值
     */
    public function getPropertyValue()
    {
        return $this->propertyValue;
    }

    /**
     * 设置属性值
     * @param string $propertyValue
     *                              参数示例：<pre></pre>
     * 此参数必填     */
    public function setPropertyValue($propertyValue)
    {
        $this->propertyValue = $propertyValue;
    }

    /**
     * @return 触发次数占比
     */
    public function getCountRatio()
    {
        return $this->countRatio;
    }

    /**
     * 设置触发次数占比.
     * @param float $countRatio
     *                          参数示例：<pre></pre>
     * 此参数必填     */
    public function setCountRatio($countRatio)
    {
        $this->countRatio = $countRatio;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('count', $this->stdResult)) {
            $this->count = $this->stdResult->{'count'};
        }
        if (array_key_exists('propertyValue', $this->stdResult)) {
            $this->propertyValue = $this->stdResult->{'propertyValue'};
        }
        if (array_key_exists('countRatio', $this->stdResult)) {
            $this->countRatio = $this->stdResult->{'countRatio'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('count', $this->arrayResult)) {
            $this->count = $arrayResult['count'];
        }
        if (array_key_exists('propertyValue', $this->arrayResult)) {
            $this->propertyValue = $arrayResult['propertyValue'];
        }
        if (array_key_exists('countRatio', $this->arrayResult)) {
            $this->countRatio = $arrayResult['countRatio'];
        }
    }
}
