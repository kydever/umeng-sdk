<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUappAppInfoData extends SDKDomain
{
    private $updatedAt;

    private $useGameSdk;

    private $name;

    private $createdAt;

    private $appkey;

    private $category;

    private $popular;

    private $platform;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 更新时间
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * 设置更新时间.
     * @param string $updatedAt
     *                          参数示例：<pre></pre>
     * 此参数必填     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return 是否为游戏
     */
    public function getUseGameSdk()
    {
        return $this->useGameSdk;
    }

    /**
     * 设置是否为游戏.
     * @param bool $useGameSdk
     *                         参数示例：<pre></pre>
     * 此参数必填     */
    public function setUseGameSdk($useGameSdk)
    {
        $this->useGameSdk = $useGameSdk;
    }

    /**
     * @return App名称
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 设置App名称.
     * @param string $name
     *                     参数示例：<pre></pre>
     * 此参数必填     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return 创建时间
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * 设置创建时间.
     * @param string $createdAt
     *                          参数示例：<pre></pre>
     * 此参数必填     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return 应用ID
     */
    public function getAppkey()
    {
        return $this->appkey;
    }

    /**
     * 设置应用ID.
     * @param string $appkey
     *                       参数示例：<pre></pre>
     * 此参数必填     */
    public function setAppkey($appkey)
    {
        $this->appkey = $appkey;
    }

    /**
     * @return 类别
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * 设置类别.
     * @param string $category
     *                         参数示例：<pre></pre>
     * 此参数必填     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return 是否关注
     */
    public function getPopular()
    {
        return $this->popular;
    }

    /**
     * 设置是否关注.
     * @param int $popular
     *                     参数示例：<pre>0</pre>
     * 此参数必填     */
    public function setPopular($popular)
    {
        $this->popular = $popular;
    }

    /**
     * @return 平台(iphone,android)
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * 设置平台(iphone,android).
     * @param string $platform
     *                         参数示例：<pre>iphone</pre>
     * 此参数必填     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('updatedAt', $this->stdResult)) {
            $this->updatedAt = $this->stdResult->{'updatedAt'};
        }
        if (array_key_exists('useGameSdk', $this->stdResult)) {
            $this->useGameSdk = $this->stdResult->{'useGameSdk'};
        }
        if (array_key_exists('name', $this->stdResult)) {
            $this->name = $this->stdResult->{'name'};
        }
        if (array_key_exists('createdAt', $this->stdResult)) {
            $this->createdAt = $this->stdResult->{'createdAt'};
        }
        if (array_key_exists('appkey', $this->stdResult)) {
            $this->appkey = $this->stdResult->{'appkey'};
        }
        if (array_key_exists('category', $this->stdResult)) {
            $this->category = $this->stdResult->{'category'};
        }
        if (array_key_exists('popular', $this->stdResult)) {
            $this->popular = $this->stdResult->{'popular'};
        }
        if (array_key_exists('platform', $this->stdResult)) {
            $this->platform = $this->stdResult->{'platform'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('updatedAt', $this->arrayResult)) {
            $this->updatedAt = $arrayResult['updatedAt'];
        }
        if (array_key_exists('useGameSdk', $this->arrayResult)) {
            $this->useGameSdk = $arrayResult['useGameSdk'];
        }
        if (array_key_exists('name', $this->arrayResult)) {
            $this->name = $arrayResult['name'];
        }
        if (array_key_exists('createdAt', $this->arrayResult)) {
            $this->createdAt = $arrayResult['createdAt'];
        }
        if (array_key_exists('appkey', $this->arrayResult)) {
            $this->appkey = $arrayResult['appkey'];
        }
        if (array_key_exists('category', $this->arrayResult)) {
            $this->category = $arrayResult['category'];
        }
        if (array_key_exists('popular', $this->arrayResult)) {
            $this->popular = $arrayResult['popular'];
        }
        if (array_key_exists('platform', $this->arrayResult)) {
            $this->platform = $arrayResult['platform'];
        }
    }
}
