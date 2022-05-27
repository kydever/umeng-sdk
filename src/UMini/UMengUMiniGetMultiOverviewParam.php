<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\APIParam;

class UMengUMiniGetMultiOverviewParam extends APIParam
{
    /**
     * @var string 数据源id（AppKey）
     */
    public string $dataSourceId;

    /**
     * @var string 分组名称
     */
    public string $isv;

    /**
     * @var string 开始时间 2022-01-01
     */
    public string $fromDate;

    /**
     * @var string 结束时间 2022-01-01
     */
    public string $toDate;

    /**
     * @var string 时间颗粒度，枚举范围day,7day,30day,week,month（逗号分隔）
     */
    public string $timeUnit;

    /**
     * @var string 分组层级(仅支持最低层级)
     */
    public string $groupName;
}
