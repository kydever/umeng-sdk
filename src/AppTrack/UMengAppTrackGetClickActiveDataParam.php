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

class UMengAppTrackGetClickActiveDataParam extends APIParam
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
    public int $unitId;

    /**
     * @var string 查询日期
     */
    #[Param]
    public string $queryDate;
}
