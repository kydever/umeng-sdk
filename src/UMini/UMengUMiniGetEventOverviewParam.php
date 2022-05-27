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

class UMengUMiniGetEventOverviewParam extends APIParam
{
    /**
     * @var string 时间颗粒度
     */
    #[Param]
    public string $timeUnit;

    /**
     * @var string 开始时间
     */
    #[Param]
    public string $fromDate;

    /**
     * @var string 结束时间
     */
    #[Param]
    public string $toDate;

    /**
     * @var string 事件名
     */
    #[Param]
    public string $eventName;

    /**
     * @var string 数据源Id（AppKey）
     */
    #[Param]
    public string $dataSourceId;
}
