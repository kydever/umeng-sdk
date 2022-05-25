<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUappDurationInfo extends SDKDomain
{
    private $name;

    private $value;

    private $percent;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 时间区间单位秒
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 设置时间区间单位秒.
     * @param string $name
     *                     参数示例：<pre>1-3,4-10,11-30</pre>
     * 此参数必填     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return 启动次数/用户数
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * 设置启动次数/用户数.
     * @param int $value
     *                   参数示例：<pre></pre>
     * 此参数必填     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return 此区间的时长占
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * 设置此区间的时长占.
     * @param float $percent
     *                       参数示例：<pre></pre>
     * 此参数必填     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('name', $this->stdResult)) {
            $this->name = $this->stdResult->{'name'};
        }
        if (array_key_exists('value', $this->stdResult)) {
            $this->value = $this->stdResult->{'value'};
        }
        if (array_key_exists('percent', $this->stdResult)) {
            $this->percent = $this->stdResult->{'percent'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('name', $this->arrayResult)) {
            $this->name = $arrayResult['name'];
        }
        if (array_key_exists('value', $this->arrayResult)) {
            $this->value = $arrayResult['value'];
        }
        if (array_key_exists('percent', $this->arrayResult)) {
            $this->percent = $arrayResult['percent'];
        }
    }
}
