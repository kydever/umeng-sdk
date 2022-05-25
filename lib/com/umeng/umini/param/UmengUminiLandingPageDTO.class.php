<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUminiLandingPageDTO extends SDKDomain
{
    private $page;

    private $displayName;

    private $visitTimes;

    private $visitUser;

    private $jumpRatio;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 页面URL
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * 设置页面URL.
     * @param string $page
     *                     参数示例：<pre></pre>
     * 此参数必填     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    /**
     * @return 页面备注
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * 设置页面备注.
     * @param string $displayName
     *                            参数示例：<pre></pre>
     * 此参数必填     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * @return 入口页次数
     */
    public function getVisitTimes()
    {
        return $this->visitTimes;
    }

    /**
     * 设置入口页次数.
     * @param Long $visitTimes
     *                         参数示例：<pre></pre>
     * 此参数必填     */
    public function setVisitTimes($visitTimes)
    {
        $this->visitTimes = $visitTimes;
    }

    /**
     * @return 入口页人数
     */
    public function getVisitUser()
    {
        return $this->visitUser;
    }

    /**
     * 设置入口页人数.
     * @param Long $visitUser
     *                        参数示例：<pre></pre>
     * 此参数必填     */
    public function setVisitUser($visitUser)
    {
        $this->visitUser = $visitUser;
    }

    /**
     * @return 跳出率
     */
    public function getJumpRatio()
    {
        return $this->jumpRatio;
    }

    /**
     * 设置跳出率.
     * @param string $jumpRatio
     *                          参数示例：<pre></pre>
     * 此参数必填     */
    public function setJumpRatio($jumpRatio)
    {
        $this->jumpRatio = $jumpRatio;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('page', $this->stdResult)) {
            $this->page = $this->stdResult->{'page'};
        }
        if (array_key_exists('displayName', $this->stdResult)) {
            $this->displayName = $this->stdResult->{'displayName'};
        }
        if (array_key_exists('visitTimes', $this->stdResult)) {
            $this->visitTimes = $this->stdResult->{'visitTimes'};
        }
        if (array_key_exists('visitUser', $this->stdResult)) {
            $this->visitUser = $this->stdResult->{'visitUser'};
        }
        if (array_key_exists('jumpRatio', $this->stdResult)) {
            $this->jumpRatio = $this->stdResult->{'jumpRatio'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('page', $this->arrayResult)) {
            $this->page = $arrayResult['page'];
        }
        if (array_key_exists('displayName', $this->arrayResult)) {
            $this->displayName = $arrayResult['displayName'];
        }
        if (array_key_exists('visitTimes', $this->arrayResult)) {
            $this->visitTimes = $arrayResult['visitTimes'];
        }
        if (array_key_exists('visitUser', $this->arrayResult)) {
            $this->visitUser = $arrayResult['visitUser'];
        }
        if (array_key_exists('jumpRatio', $this->arrayResult)) {
            $this->jumpRatio = $arrayResult['jumpRatio'];
        }
    }
}
