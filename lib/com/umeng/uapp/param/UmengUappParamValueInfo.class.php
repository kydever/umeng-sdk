<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUappParamValueInfo extends SDKDomain
{
    private $name;

    private $count;

    private $percent;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 参数值名称
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 设置参数值名称.
     * @param string $name
     *                     参数示例：<pre>%e7%a4%ba%e4%be%8b（示例）</pre>
     * 此参数必填     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return 统计的消息数
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * 设置统计的消息数.
     * @param int $count
     *                   参数示例：<pre></pre>
     * 此参数必填     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @return 当前事件下此参数值消息数的占比
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * 设置当前事件下此参数值消息数的占比.
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
        if (array_key_exists('count', $this->stdResult)) {
            $this->count = $this->stdResult->{'count'};
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
        if (array_key_exists('count', $this->arrayResult)) {
            $this->count = $arrayResult['count'];
        }
        if (array_key_exists('percent', $this->arrayResult)) {
            $this->percent = $arrayResult['percent'];
        }
    }
}
