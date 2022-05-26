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

class UMengApptrackGetActiveDetailDataParam extends APIParam
{
    /**
     * @var string 应用 AppKey
     */
    #[Param]
    public string $appKey;

    /**
     * @var null|int 计划 ID
     */
    #[Param]
    public ?int $planId;

    /**
     * @var string 查询日期
     */
    #[Param]
    public string $queryDate;

    /**
     * @var null|int 设置当前页数
     */
    #[Param]
    public ?int $pageNum;

    /**
     * @var null|int 每页显示的记录数
     */
    #[Param]
    public ?int $pageSize;
}
