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

class UMengUMiniGetMultiOverviewParam extends APIParam
{
    /**
     * @var array [
     *            'dataSourceId'=>' string 数据源id（AppKey）',
     *            'isv'=>' string 分组名称',
     *            'fromDate'=>' string 开始时间',
     *            'toDate'=>' string 结束时间',
     *            'timeUnit'=>' string 时间颗粒度，枚举范围day,7day,30day,week,month（逗号分隔）',
     *            'groupName'=>' string 分组层级(仅支持最低层级)',
     *            ]
     */
    #[Param]
    public array $sdkStdResult;
}
