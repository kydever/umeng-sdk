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

class UMengAppTrackGetPayAnalysisDataParam extends APIParam
{
    /**
     * @var int 计划 ID
     */
    #[Param]
    public int $planId;

    /**
     * @var int 单元 ID
     */
    #[Param]
    public int $unitId = 0;

    /**
     * @var string 查询日期 2018-12-19
     */
    #[Param]
    public string $queryDate;

    /**
     * @var int 当前页数
     */
    #[Param]
    public int $pageNum = 1;

    /**
     * @var int 每页显示的记录数
     */
    #[Param]
    public int $pageSize = 20;
}
