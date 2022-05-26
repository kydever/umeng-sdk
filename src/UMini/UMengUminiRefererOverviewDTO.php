<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\Annotation\ParamArray;
use KY\UMeng\Client\APIParam;

class UMengUminiRefererOverviewDTO extends APIParam
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
     * @var array include @see UmengUminiRefererIndicatorDTO[] $data
     */
    #[ParamArray(class: UMengUminiRefererIndicatorDTO::class)]
    public array $data;
}
