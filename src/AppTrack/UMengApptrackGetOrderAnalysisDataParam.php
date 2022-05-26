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

class UMengApptrackGetOrderAnalysisDataParam extends APIParam
{
    /**
     * @var int 计划 ID
     */
    #[Param]
    public int $planId;

    /**
     * @var int|null 单元 ID
     */
    #[Param]
    public ?int $unitId;

    /**
     * @var string 查询日期
     */
    #[Param]
    public string $queryDate;

    /**
     * @var int|null 当前页数
     */
    #[Param]
    public ?int $pageNum;

    /**
     * @var int 每页显示的记录数
     */
    #[Param]
    public int $pageSize = 10;
}
