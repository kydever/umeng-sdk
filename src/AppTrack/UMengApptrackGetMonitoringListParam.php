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

class UMengApptrackGetMonitoringListParam extends APIParam
{
    /**
     * @var int 推广计划 ID
     */
    #[Param]
    public int $planId;

    /**
     * @var null|int 当前页数
     */
    #[Param]
    public ?int $pageNum;

    /**
     * @var null|int 每页显示的记录数
     */
    #[Param]
    public ?int $pageSize;
}
