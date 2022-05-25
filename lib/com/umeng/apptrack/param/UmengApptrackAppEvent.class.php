<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengApptrackAppEvent extends SDKDomain
{
    private $eventName;

    private $eventNumber;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 自定义事件名称
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * 设置自定义事件名称.
     * @param string $eventName
     *                          参数示例：<pre></pre>
     * 此参数必填     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
    }

    /**
     * @return 自定义事件值
     */
    public function getEventNumber()
    {
        return $this->eventNumber;
    }

    /**
     * 设置自定义事件值
     * @param Long $eventNumber
     *                          参数示例：<pre></pre>
     * 此参数必填     */
    public function setEventNumber($eventNumber)
    {
        $this->eventNumber = $eventNumber;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('eventName', $this->stdResult)) {
            $this->eventName = $this->stdResult->{'eventName'};
        }
        if (array_key_exists('eventNumber', $this->stdResult)) {
            $this->eventNumber = $this->stdResult->{'eventNumber'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('eventName', $this->arrayResult)) {
            $this->eventName = $arrayResult['eventName'];
        }
        if (array_key_exists('eventNumber', $this->arrayResult)) {
            $this->eventNumber = $arrayResult['eventNumber'];
        }
    }
}
