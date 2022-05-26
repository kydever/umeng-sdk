<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\APIParam;

class UMengUMiniGetCampaignOverviewParam extends APIParam
{
    /**
     * @var array [
     *            'timeUnit'=>' string 时间颗粒度（枚举范围5min,hour,day,7day,30day）',
     *            'fromDate'=>' string 开始时间',
     *            'toDate'=>' string 结束时间',
     *            'campaign'=>' string 活动',
     *            'pageSize'=>' int 页码',
     *            'pageIndex'=>' int 每页记录条数',
     *            'dataSourceId'=>' string 数据源id（AppKey）',
     *            'indicators'=>' string 指标名称(以逗号分隔，可选择一个或多个）,newUser,activeUser,launch,visitTimes,onceDuration',
     *            ]
     */
    #[Param]
    public array $sdkStdResult;
}
