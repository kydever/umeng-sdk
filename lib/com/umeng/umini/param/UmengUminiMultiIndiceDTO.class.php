<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUminiMultiIndiceDTO extends SDKDomain
{
    private $gmtModified;

    private $indicesId;

    private $code;

    private $propertyName;

    private $displayName;

    private $eventName;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 修改时间
     */
    public function getGmtModified()
    {
        return $this->gmtModified;
    }

    /**
     * 设置修改时间.
     * @param string $gmtModified
     *                            参数示例：<pre></pre>
     * 此参数必填     */
    public function setGmtModified($gmtModified)
    {
        $this->gmtModified = $gmtModified;
    }

    /**
     * @return 指标ID
     */
    public function getIndicesId()
    {
        return $this->indicesId;
    }

    /**
     * 设置指标ID.
     * @param string $indicesId
     *                          参数示例：<pre></pre>
     * 此参数必填     */
    public function setIndicesId($indicesId)
    {
        $this->indicesId = $indicesId;
    }

    /**
     * @return 指标类型（触发用户数：event_device，触发次数：event_count，累计值：property_num_sum）
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * 设置指标类型（触发用户数：event_device，触发次数：event_count，累计值：property_num_sum）.
     * @param string $code
     *                     参数示例：<pre></pre>
     * 此参数必填     */
    public function setCode($code)
    {
        $this->code = $code;
    }

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

    /**
     * @return 指标名
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * 设置指标名.
     * @param string $displayName
     *                            参数示例：<pre></pre>
     * 此参数必填     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * @return 事件名称
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * 设置事件名称.
     * @param string $eventName
     *                          参数示例：<pre></pre>
     * 此参数必填     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('gmtModified', $this->stdResult)) {
            $this->gmtModified = $this->stdResult->{'gmtModified'};
        }
        if (array_key_exists('indicesId', $this->stdResult)) {
            $this->indicesId = $this->stdResult->{'indicesId'};
        }
        if (array_key_exists('code', $this->stdResult)) {
            $this->code = $this->stdResult->{'code'};
        }
        if (array_key_exists('propertyName', $this->stdResult)) {
            $this->propertyName = $this->stdResult->{'propertyName'};
        }
        if (array_key_exists('displayName', $this->stdResult)) {
            $this->displayName = $this->stdResult->{'displayName'};
        }
        if (array_key_exists('eventName', $this->stdResult)) {
            $this->eventName = $this->stdResult->{'eventName'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('gmtModified', $this->arrayResult)) {
            $this->gmtModified = $arrayResult['gmtModified'];
        }
        if (array_key_exists('indicesId', $this->arrayResult)) {
            $this->indicesId = $arrayResult['indicesId'];
        }
        if (array_key_exists('code', $this->arrayResult)) {
            $this->code = $arrayResult['code'];
        }
        if (array_key_exists('propertyName', $this->arrayResult)) {
            $this->propertyName = $arrayResult['propertyName'];
        }
        if (array_key_exists('displayName', $this->arrayResult)) {
            $this->displayName = $arrayResult['displayName'];
        }
        if (array_key_exists('eventName', $this->arrayResult)) {
            $this->eventName = $arrayResult['eventName'];
        }
    }
}
