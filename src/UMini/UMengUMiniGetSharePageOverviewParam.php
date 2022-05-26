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

class UMengUMiniGetSharePageOverviewParam extends APIParam
{
    /**
     * @var array [
     *            'dataSourceId'=>' string 数据源id（AppKey）',
     *            'pageIndex'=>' int 页码',
     *            'pageSize'=>' int 每页记录数',
     *            'fromDate'=>' string 开始时间',
     *            'toDate'=>' string 结束时间',
     *            'timeUnit'=>' string 时间颗粒度，枚举范围day,7day,30day,week,month（逗号分隔）',
     *            'orderBy'=>' string 排序指标(可选count,reflow,newUser,user)',
     *            'direction'=>' string 排序方向(可选desc,asc)',
     *            ]
     */
    #[Param]
    public array $sdkStdResult;
}
