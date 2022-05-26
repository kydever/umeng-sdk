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

class UMengApptrackGetPlanListParam extends APIParam
{
    /**
     * @var string|null 应用 AppKey
     */
    #[Param]
    public ?string $appKey;

    /**
     * @var int 当前页数
     */
    #[Param]
    public int $pageNum = 1;

    /**
     * @var int 每页显示的记录数
     */
    #[Param]
    public int $pageSize = 10;
}
