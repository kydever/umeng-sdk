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

class UMengUMiniGetCustomerSourceOverviewParam extends APIParam
{
    /**
     * @var array [
     *            'fromDate'=>' string 开始时间',
     *            'toDate'=>' string 结束时间',
     *            'timeUnit'=>' string 时间颗粒度(可选时间颗粒度：5min,hour,day,7day,30day)',
     *            'dataSourceId'=>' string 数据源id（AppKey）',
     *            'sourceType'=>' string 获客来源类型（活动：campaign；场景：scene；渠道：channel ）',
     *            'orderBy'=>' string 排序指标，默认新增用户（新增用户：newUser；打开次数：launch；活跃用户：activeUser；页面访问次数：visitTimes；次均停留时长：onceDuration；创建时间：createDateTime）',
     *            'direction'=>' string 排序方向，默认倒序（正序：asc；倒序：desc）',
     *            ]
     */
    #[Param]
    public array $sdkStdResult;
}
