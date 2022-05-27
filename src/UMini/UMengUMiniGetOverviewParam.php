<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\APIParam;

class UMengUMiniGetOverviewParam extends APIParam
{
    /**
     * @var string 数据源id（AppKey）
     */
    public string $dataSourceId;

    /**
     * @var string 开始时间（yyyy-MM-dd)
     */
    public string $fromDate;

    /**
     * @var string 结束时间（yyyy-MM-dd)
     */
    public string $toDate;

    /**
     * @var string 时间颗粒度(可选时间颗粒度：5min,hour,day,7day,30day)
     */
    public string $timeUnit;

    /**
     * @var string 指标名称(以逗号分隔，可选择一个或多个）,newUser,activeUser,launch,visitTimes,onceDuration,dailyDuration
     */
    public string $indicators;

    /**
     * @var int 页码
     */
    public int $pageIndex = 1;

    /**
     * @var int 每页条数
     */
    public int $pageSize = 30;
}
