<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengApptrackAppMonitors extends SDKDomain
{
    private $mid;

    private $mName;

    private $chanName;

    private $downloadUrl;

    private $shortUrl;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 单元id
     */
    public function getMid()
    {
        return $this->mid;
    }

    /**
     * 设置单元id.
     * @param Long $mid
     *                  参数示例：<pre></pre>
     * 此参数必填     */
    public function setMid($mid)
    {
        $this->mid = $mid;
    }

    /**
     * @return 单元名称
     */
    public function getMName()
    {
        return $this->mName;
    }

    /**
     * 设置单元名称.
     * @param string $mName
     *                      参数示例：<pre></pre>
     * 此参数必填     */
    public function setMName($mName)
    {
        $this->mName = $mName;
    }

    /**
     * @return 渠道名称
     */
    public function getChanName()
    {
        return $this->chanName;
    }

    /**
     * 设置渠道名称.
     * @param string $chanName
     *                         参数示例：<pre></pre>
     * 此参数必填     */
    public function setChanName($chanName)
    {
        $this->chanName = $chanName;
    }

    /**
     * @return 下载地址
     */
    public function getDownloadUrl()
    {
        return $this->downloadUrl;
    }

    /**
     * 设置下载地址
     * @param string $downloadUrl
     *                            参数示例：<pre></pre>
     * 此参数必填     */
    public function setDownloadUrl($downloadUrl)
    {
        $this->downloadUrl = $downloadUrl;
    }

    /**
     * @return 短链地址
     */
    public function getShortUrl()
    {
        return $this->shortUrl;
    }

    /**
     * 设置短链地址
     * @param string $shortUrl
     *                         参数示例：<pre></pre>
     * 此参数必填     */
    public function setShortUrl($shortUrl)
    {
        $this->shortUrl = $shortUrl;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('mid', $this->stdResult)) {
            $this->mid = $this->stdResult->{'mid'};
        }
        if (array_key_exists('mName', $this->stdResult)) {
            $this->mName = $this->stdResult->{'mName'};
        }
        if (array_key_exists('chanName', $this->stdResult)) {
            $this->chanName = $this->stdResult->{'chanName'};
        }
        if (array_key_exists('downloadUrl', $this->stdResult)) {
            $this->downloadUrl = $this->stdResult->{'downloadUrl'};
        }
        if (array_key_exists('shortUrl', $this->stdResult)) {
            $this->shortUrl = $this->stdResult->{'shortUrl'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('mid', $this->arrayResult)) {
            $this->mid = $arrayResult['mid'];
        }
        if (array_key_exists('mName', $this->arrayResult)) {
            $this->mName = $arrayResult['mName'];
        }
        if (array_key_exists('chanName', $this->arrayResult)) {
            $this->chanName = $arrayResult['chanName'];
        }
        if (array_key_exists('downloadUrl', $this->arrayResult)) {
            $this->downloadUrl = $arrayResult['downloadUrl'];
        }
        if (array_key_exists('shortUrl', $this->arrayResult)) {
            $this->shortUrl = $arrayResult['shortUrl'];
        }
    }
}
