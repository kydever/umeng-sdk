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

class UMengApptrackGetRegisterLoginDataParam extends APIParam
{
    /**
     * @var string 计划 ID
     */
    #[Param]
    public int $planId;

    /**
     * @var int|null 单元 ID
     */
    #[Param]
    public ?int $unitId;

    /**
     * @var string 设置查询日期 2018-12-19
     */
    #[Param]
    public string $queryDate;
}
