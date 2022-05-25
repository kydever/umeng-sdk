<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUminiSharePageIndicatorDTO extends SDKDomain
{
    private $reflowRatio;

    private $path;

    private $reflow;

    private $newUser;

    private $count;

    private $user;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 分享回流比
     */
    public function getReflowRatio()
    {
        return $this->reflowRatio;
    }

    /**
     * 设置分享回流比.
     * @param float $reflowRatio
     *                           参数示例：<pre></pre>
     * 此参数必填     */
    public function setReflowRatio($reflowRatio)
    {
        $this->reflowRatio = $reflowRatio;
    }

    /**
     * @return 页面url
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * 设置页面url.
     * @param string $path
     *                     参数示例：<pre></pre>
     * 此参数必填     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * @return 分享回流
     */
    public function getReflow()
    {
        return $this->reflow;
    }

    /**
     * 设置分享回流
     * @param Long $reflow
     *                     参数示例：<pre></pre>
     * 此参数必填     */
    public function setReflow($reflow)
    {
        $this->reflow = $reflow;
    }

    /**
     * @return 分享新增
     */
    public function getNewUser()
    {
        return $this->newUser;
    }

    /**
     * 设置分享新增.
     * @param Long $newUser
     *                      参数示例：<pre></pre>
     * 此参数必填     */
    public function setNewUser($newUser)
    {
        $this->newUser = $newUser;
    }

    /**
     * @return 分享次数
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * 设置分享次数.
     * @param Long $count
     *                    参数示例：<pre></pre>
     * 此参数必填     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @return 分享人数
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * 设置分享人数.
     * @param Long $user
     *                   参数示例：<pre></pre>
     * 此参数必填     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('reflowRatio', $this->stdResult)) {
            $this->reflowRatio = $this->stdResult->{'reflowRatio'};
        }
        if (array_key_exists('path', $this->stdResult)) {
            $this->path = $this->stdResult->{'path'};
        }
        if (array_key_exists('reflow', $this->stdResult)) {
            $this->reflow = $this->stdResult->{'reflow'};
        }
        if (array_key_exists('newUser', $this->stdResult)) {
            $this->newUser = $this->stdResult->{'newUser'};
        }
        if (array_key_exists('count', $this->stdResult)) {
            $this->count = $this->stdResult->{'count'};
        }
        if (array_key_exists('user', $this->stdResult)) {
            $this->user = $this->stdResult->{'user'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('reflowRatio', $this->arrayResult)) {
            $this->reflowRatio = $arrayResult['reflowRatio'];
        }
        if (array_key_exists('path', $this->arrayResult)) {
            $this->path = $arrayResult['path'];
        }
        if (array_key_exists('reflow', $this->arrayResult)) {
            $this->reflow = $arrayResult['reflow'];
        }
        if (array_key_exists('newUser', $this->arrayResult)) {
            $this->newUser = $arrayResult['newUser'];
        }
        if (array_key_exists('count', $this->arrayResult)) {
            $this->count = $arrayResult['count'];
        }
        if (array_key_exists('user', $this->arrayResult)) {
            $this->user = $arrayResult['user'];
        }
    }
}
