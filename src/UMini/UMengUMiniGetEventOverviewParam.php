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
     * @var array [
     *            'timeUnit'=>' string 时间颗粒度',
     *            'fromDate'=>' string 开始时间',
     *            'toDate'=>' string 结束时间',
     *            'eventName'=>' string 事件名',
     *            'dataSourceId'=>' string 数据源id（AppKey）',
     *            ]
     */
    #[Param]
    public array $sdkStdResult;
}
