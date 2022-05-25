<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUminiEventProvertyDTO extends SDKDomain
{
    private $propertyName;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 属性名
     */
    public function getPropertyName()
    {
        return $this->propertyName;
    }

    /**
     * 设置属性名.
     * @param string $propertyName
     *                             参数示例：<pre></pre>
     * 此参数必填     */
    public function setPropertyName($propertyName)
    {
        $this->propertyName = $propertyName;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('propertyName', $this->stdResult)) {
            $this->propertyName = $this->stdResult->{'propertyName'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('propertyName', $this->arrayResult)) {
            $this->propertyName = $arrayResult['propertyName'];
        }
    }
}
