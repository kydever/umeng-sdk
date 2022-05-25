<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengApptrackReport extends SDKDomain
{
    private $orderId;

    private $advertiserId;

    private $adPlanId;

    private $adPlanName;

    private $adGroupId;

    private $adGroupName;

    private $adCreativeId;

    private $adCreativeName;

    private $pid;

    private $pidName;

    private $mediaId;

    private $mediaName;

    private $landingUrl;

    private $showPv;

    private $clickPv;

    private $bidCost;

    private $conversionUv;

    private $ds;

    private $retentionCount;

    private $version;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 本次投放订单号
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 设置本次投放订单号.
     * @param string $orderId
     *                        参数示例：<pre></pre>
     * 此参数必填     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return 广告主id
     */
    public function getAdvertiserId()
    {
        return $this->advertiserId;
    }

    /**
     * 设置广告主id.
     * @param Long $advertiserId
     *                           参数示例：<pre></pre>
     * 此参数必填     */
    public function setAdvertiserId($advertiserId)
    {
        $this->advertiserId = $advertiserId;
    }

    /**
     * @return 推广计划id
     */
    public function getAdPlanId()
    {
        return $this->adPlanId;
    }

    /**
     * 设置推广计划id.
     * @param Long $adPlanId
     *                       参数示例：<pre></pre>
     * 此参数必填     */
    public function setAdPlanId($adPlanId)
    {
        $this->adPlanId = $adPlanId;
    }

    /**
     * @return 推广计划名称
     */
    public function getAdPlanName()
    {
        return $this->adPlanName;
    }

    /**
     * 设置推广计划名称.
     * @param string $adPlanName
     *                           参数示例：<pre></pre>
     * 此参数必填     */
    public function setAdPlanName($adPlanName)
    {
        $this->adPlanName = $adPlanName;
    }

    /**
     * @return 推广组id
     */
    public function getAdGroupId()
    {
        return $this->adGroupId;
    }

    /**
     * 设置推广组id.
     * @param Long $adGroupId
     *                        参数示例：<pre></pre>
     * 此参数必填     */
    public function setAdGroupId($adGroupId)
    {
        $this->adGroupId = $adGroupId;
    }

    /**
     * @return 推广组名称
     */
    public function getAdGroupName()
    {
        return $this->adGroupName;
    }

    /**
     * 设置推广组名称.
     * @param string $adGroupName
     *                            参数示例：<pre></pre>
     * 此参数必填     */
    public function setAdGroupName($adGroupName)
    {
        $this->adGroupName = $adGroupName;
    }

    /**
     * @return 推广创意id
     */
    public function getAdCreativeId()
    {
        return $this->adCreativeId;
    }

    /**
     * 设置推广创意id.
     * @param Long $adCreativeId
     *                           参数示例：<pre></pre>
     * 此参数必填     */
    public function setAdCreativeId($adCreativeId)
    {
        $this->adCreativeId = $adCreativeId;
    }

    /**
     * @return 推广创意名称
     */
    public function getAdCreativeName()
    {
        return $this->adCreativeName;
    }

    /**
     * 设置推广创意名称.
     * @param string $adCreativeName
     *                               参数示例：<pre></pre>
     * 此参数必填     */
    public function setAdCreativeName($adCreativeName)
    {
        $this->adCreativeName = $adCreativeName;
    }

    /**
     * @return 推广位id
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * 设置推广位id.
     * @param Long $pid
     *                  参数示例：<pre></pre>
     * 此参数必填     */
    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    /**
     * @return 推广位名称
     */
    public function getPidName()
    {
        return $this->pidName;
    }

    /**
     * 设置推广位名称.
     * @param string $pidName
     *                        参数示例：<pre></pre>
     * 此参数必填     */
    public function setPidName($pidName)
    {
        $this->pidName = $pidName;
    }

    /**
     * @return 媒体id
     */
    public function getMediaId()
    {
        return $this->mediaId;
    }

    /**
     * 设置媒体id.
     * @param Long $mediaId
     *                      参数示例：<pre></pre>
     * 此参数必填     */
    public function setMediaId($mediaId)
    {
        $this->mediaId = $mediaId;
    }

    /**
     * @return 媒体名称
     */
    public function getMediaName()
    {
        return $this->mediaName;
    }

    /**
     * 设置媒体名称.
     * @param string $mediaName
     *                          参数示例：<pre></pre>
     * 此参数必填     */
    public function setMediaName($mediaName)
    {
        $this->mediaName = $mediaName;
    }

    /**
     * @return 落地页链接
     */
    public function getLandingUrl()
    {
        return $this->landingUrl;
    }

    /**
     * 设置落地页链接.
     * @param string $landingUrl
     *                           参数示例：<pre></pre>
     * 此参数必填     */
    public function setLandingUrl($landingUrl)
    {
        $this->landingUrl = $landingUrl;
    }

    /**
     * @return 展现pv
     */
    public function getShowPv()
    {
        return $this->showPv;
    }

    /**
     * 设置展现pv.
     * @param Long $showPv
     *                     参数示例：<pre></pre>
     * 此参数必填     */
    public function setShowPv($showPv)
    {
        $this->showPv = $showPv;
    }

    /**
     * @return 点击pv
     */
    public function getClickPv()
    {
        return $this->clickPv;
    }

    /**
     * 设置点击pv.
     * @param Long $clickPv
     *                      参数示例：<pre></pre>
     * 此参数必填     */
    public function setClickPv($clickPv)
    {
        $this->clickPv = $clickPv;
    }

    /**
     * @return 竞价消耗
     */
    public function getBidCost()
    {
        return $this->bidCost;
    }

    /**
     * 设置竞价消耗.
     * @param float $bidCost
     *                       参数示例：<pre></pre>
     * 此参数必填     */
    public function setBidCost($bidCost)
    {
        $this->bidCost = $bidCost;
    }

    /**
     * @return 转化数
     */
    public function getConversionUv()
    {
        return $this->conversionUv;
    }

    /**
     * 设置转化数.
     * @param Long $conversionUv
     *                           参数示例：<pre></pre>
     * 此参数必填     */
    public function setConversionUv($conversionUv)
    {
        $this->conversionUv = $conversionUv;
    }

    /**
     * @return 数据日期
     */
    public function getDs()
    {
        return $this->ds;
    }

    /**
     * 设置数据日期
     * @param string $ds
     *                   参数示例：<pre></pre>
     * 此参数必填     */
    public function setDs($ds)
    {
        $this->ds = $ds;
    }

    /**
     * @return 次日留存数
     */
    public function getRetentionCount()
    {
        return $this->retentionCount;
    }

    /**
     * 设置次日留存数.
     * @param Long $retentionCount
     *                             参数示例：<pre></pre>
     * 此参数必填     */
    public function setRetentionCount($retentionCount)
    {
        $this->retentionCount = $retentionCount;
    }

    /**
     * @return 数据版本号
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * 设置数据版本号.
     * @param int $version
     *                     参数示例：<pre>默认0，重跑时需+1</pre>
     * 此参数必填     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('orderId', $this->stdResult)) {
            $this->orderId = $this->stdResult->{'orderId'};
        }
        if (array_key_exists('advertiserId', $this->stdResult)) {
            $this->advertiserId = $this->stdResult->{'advertiserId'};
        }
        if (array_key_exists('adPlanId', $this->stdResult)) {
            $this->adPlanId = $this->stdResult->{'adPlanId'};
        }
        if (array_key_exists('adPlanName', $this->stdResult)) {
            $this->adPlanName = $this->stdResult->{'adPlanName'};
        }
        if (array_key_exists('adGroupId', $this->stdResult)) {
            $this->adGroupId = $this->stdResult->{'adGroupId'};
        }
        if (array_key_exists('adGroupName', $this->stdResult)) {
            $this->adGroupName = $this->stdResult->{'adGroupName'};
        }
        if (array_key_exists('adCreativeId', $this->stdResult)) {
            $this->adCreativeId = $this->stdResult->{'adCreativeId'};
        }
        if (array_key_exists('adCreativeName', $this->stdResult)) {
            $this->adCreativeName = $this->stdResult->{'adCreativeName'};
        }
        if (array_key_exists('pid', $this->stdResult)) {
            $this->pid = $this->stdResult->{'pid'};
        }
        if (array_key_exists('pidName', $this->stdResult)) {
            $this->pidName = $this->stdResult->{'pidName'};
        }
        if (array_key_exists('mediaId', $this->stdResult)) {
            $this->mediaId = $this->stdResult->{'mediaId'};
        }
        if (array_key_exists('mediaName', $this->stdResult)) {
            $this->mediaName = $this->stdResult->{'mediaName'};
        }
        if (array_key_exists('landingUrl', $this->stdResult)) {
            $this->landingUrl = $this->stdResult->{'landingUrl'};
        }
        if (array_key_exists('showPv', $this->stdResult)) {
            $this->showPv = $this->stdResult->{'showPv'};
        }
        if (array_key_exists('clickPv', $this->stdResult)) {
            $this->clickPv = $this->stdResult->{'clickPv'};
        }
        if (array_key_exists('bidCost', $this->stdResult)) {
            $this->bidCost = $this->stdResult->{'bidCost'};
        }
        if (array_key_exists('conversionUv', $this->stdResult)) {
            $this->conversionUv = $this->stdResult->{'conversionUv'};
        }
        if (array_key_exists('ds', $this->stdResult)) {
            $this->ds = $this->stdResult->{'ds'};
        }
        if (array_key_exists('retentionCount', $this->stdResult)) {
            $this->retentionCount = $this->stdResult->{'retentionCount'};
        }
        if (array_key_exists('version', $this->stdResult)) {
            $this->version = $this->stdResult->{'version'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('orderId', $this->arrayResult)) {
            $this->orderId = $arrayResult['orderId'];
        }
        if (array_key_exists('advertiserId', $this->arrayResult)) {
            $this->advertiserId = $arrayResult['advertiserId'];
        }
        if (array_key_exists('adPlanId', $this->arrayResult)) {
            $this->adPlanId = $arrayResult['adPlanId'];
        }
        if (array_key_exists('adPlanName', $this->arrayResult)) {
            $this->adPlanName = $arrayResult['adPlanName'];
        }
        if (array_key_exists('adGroupId', $this->arrayResult)) {
            $this->adGroupId = $arrayResult['adGroupId'];
        }
        if (array_key_exists('adGroupName', $this->arrayResult)) {
            $this->adGroupName = $arrayResult['adGroupName'];
        }
        if (array_key_exists('adCreativeId', $this->arrayResult)) {
            $this->adCreativeId = $arrayResult['adCreativeId'];
        }
        if (array_key_exists('adCreativeName', $this->arrayResult)) {
            $this->adCreativeName = $arrayResult['adCreativeName'];
        }
        if (array_key_exists('pid', $this->arrayResult)) {
            $this->pid = $arrayResult['pid'];
        }
        if (array_key_exists('pidName', $this->arrayResult)) {
            $this->pidName = $arrayResult['pidName'];
        }
        if (array_key_exists('mediaId', $this->arrayResult)) {
            $this->mediaId = $arrayResult['mediaId'];
        }
        if (array_key_exists('mediaName', $this->arrayResult)) {
            $this->mediaName = $arrayResult['mediaName'];
        }
        if (array_key_exists('landingUrl', $this->arrayResult)) {
            $this->landingUrl = $arrayResult['landingUrl'];
        }
        if (array_key_exists('showPv', $this->arrayResult)) {
            $this->showPv = $arrayResult['showPv'];
        }
        if (array_key_exists('clickPv', $this->arrayResult)) {
            $this->clickPv = $arrayResult['clickPv'];
        }
        if (array_key_exists('bidCost', $this->arrayResult)) {
            $this->bidCost = $arrayResult['bidCost'];
        }
        if (array_key_exists('conversionUv', $this->arrayResult)) {
            $this->conversionUv = $arrayResult['conversionUv'];
        }
        if (array_key_exists('ds', $this->arrayResult)) {
            $this->ds = $arrayResult['ds'];
        }
        if (array_key_exists('retentionCount', $this->arrayResult)) {
            $this->retentionCount = $arrayResult['retentionCount'];
        }
        if (array_key_exists('version', $this->arrayResult)) {
            $this->version = $arrayResult['version'];
        }
    }
}
