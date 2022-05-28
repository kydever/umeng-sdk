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

class UMengUMiniRefererOverviewDTO extends APIParam
{
    /**
     * @var int 当前页
     */
    #[Param]
    public int $currentPage;

    /**
     * @var int 总记录数
     */
    #[Param]
    public int $totalCount;

    /**
     * @var UMengUMiniRefererIndicatorDTO[]
     */
    #[Param]
    public array $data;
}
