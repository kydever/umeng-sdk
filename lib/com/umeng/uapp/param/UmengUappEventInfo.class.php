<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUappEventInfo extends SDKDomain
{
    private $name;

    private $count;

    private $id;

    private $displayName;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 事件名称
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 设置事件名称.
     * @param string $name
     *                     参数示例：<pre></pre>
     * 此参数必填     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return 统计次数
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * 设置统计次数.
     * @param int $count
     *                   参数示例：<pre></pre>
     * 此参数必填     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @return ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 设置ID.
     * @param string $id
     *                   参数示例：<pre></pre>
     * 此参数必填     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return 显示名称
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * 设置显示名称.
     * @param string $displayName
     *                            参数示例：<pre></pre>
     * 此参数必填     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
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
        if (array_key_exists('id', $this->stdResult)) {
            $this->id = $this->stdResult->{'id'};
        }
        if (array_key_exists('displayName', $this->stdResult)) {
            $this->displayName = $this->stdResult->{'displayName'};
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
        if (array_key_exists('id', $this->arrayResult)) {
            $this->id = $arrayResult['id'];
        }
        if (array_key_exists('displayName', $this->arrayResult)) {
            $this->displayName = $arrayResult['displayName'];
        }
    }
}
