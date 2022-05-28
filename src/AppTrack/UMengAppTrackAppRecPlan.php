<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\AppTrack;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\APIParam;

class UMengAppTrackAppRecPlan extends APIParam
{
    /**
     * @var int 计划 ID
     */
    #[Param]
    public int $planId;

    /**
     * @var string 计划名称
     */
    #[Param]
    public string $planName;

    /**
     * @var string 计划开始日期
     */
    #[Param]
    public string $startDay;

    /**
     * @var string 计划结束日期
     */
    #[Param]
    public string $endDay;
}
