<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUappCountDataNameValue extends SDKDomain
{
    private $name;

    private $value;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 版本或渠道名
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 设置版本或渠道名.
     * @param string $name
     *                     参数示例：<pre></pre>
     * 此参数必填     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return 统计数
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * 设置统计数.
     * @param int $value
     *                   参数示例：<pre></pre>
     * 此参数必填     */
    public function setValue($value)
    {
        $this->value = $value;
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
    }
}
