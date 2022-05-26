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

class UMengUMiniGetChannelOverviewParam extends APIParam
{
    /**
     * @var array [
     *            'fromDate'=>' string 开始时间',
     *            'toDate'=>' string 结束时间',
     *            'channel'=>' string 渠道',
     *            'timeUnit'=>' string 时间颗粒度(可选时间颗粒度：5min,hour,day,7day,30day)',
     *            'dataSourceId'=>' string 数据源id（AppKey）',
     *            'pageIndex'=>' int 页码',
     *            'pageSize'=>' int 每页记录数',
     *            'indicators'=>' string 指标名称(以逗号分隔，可选择一个或多个）,newUser,activeUser,launch,visitTimes,onceDuration',
     *            ]
     */
    #[Param]
    public array $sdkStdResult;
}
