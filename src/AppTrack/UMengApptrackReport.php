<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\AppTrack;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\APIParam;

class UMengApptrackReport extends APIParam
{
    /**
     * @var string 本次投放订单号
     */
    #[Param]
    public string $orderId;

    /**
     * @var int 广告主 ID
     */
    #[Param]
    public int $advertiserId;

    /**
     * @var int 推广计划 ID
     */
    #[Param]
    public int $adPlanId;

    /**
     * @var string 推广计划名称
     */
    #[Param]
    public string $adPlanName;

    /**
     * @var int 推广组 ID
     */
    #[Param]
    public int $adGroupId;

    /**
     * @var string 推广组名称
     */
    #[Param]
    public string $adGroupName;

    /**
     * @var int 推广创意 ID
     */
    #[Param]
    public int $adCreativeId;

    /**
     * @var string 推广创意名称
     */
    #[Param]
    public string $adCreativeName;

    /**
     * @var int 推广位 ID
     */
    #[Param]
    public int $pid;

    /**
     * @var string 推广位名称
     */
    #[Param]
    public string $pidName;

    /**
     * @var int 媒体 ID
     */
    #[Param]
    public int $mediaId;

    /**
     * @var string 媒体名称
     */
    #[Param]
    public string $mediaName;

    /**
     * @var string 落地页链接
     */
    #[Param]
    public string $landingUrl;

    /**
     * @var int 展现 pv
     */
    #[Param]
    public int $showPv;

    /**
     * @var int 点击 pv
     */
    #[Param]
    public int $clickPv;

    /**
     * @var float 竞价消耗
     */
    #[Param]
    public float $bidCost;

    /**
     * @var int 转化数
     */
    #[Param]
    public int $conversionUv;

    /**
     * @var string 数据日期
     */
    #[Param]
    public string $ds;

    /**
     * @var int 次日留存数
     */
    #[Param]
    public int $retentionCount;

    /**
     * @var int 数据版本号
     */
    #[Param]
    public int $version;
}
