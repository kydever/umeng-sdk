<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\APIParam;

class UMengUMiniGetCampaignOverviewParam extends APIParam
{
    /**
     * @var string 时间颗粒度（枚举范围5min,hour,day,7day,30day）
     */
    public string $timeUnit;

    /**
     * @var string 开始时间
     */
    public string $fromDate;

    /**
     * @var string 结束时间
     */
    public string $toDate;

    /**
     * @var string 活动
     */
    public string $campaign;

    /**
     * @var int 页码
     */
    public int $pageIndex = 1;

    /**
     * @var int 每页记录数
     */
    public int $pageSize = 30;

    /**
     * @var string 数据源id（AppKey）
     */
    public string $dataSourceId;

    /**
     * @var string 指标名称(以逗号分隔，可选择一个或多个）,newUser,activeUser,launch,visitTimes,onceDuration
     */
    public string $indicators;
}
