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

class UMengUminiSharePageOverviewDTO extends APIParam
{
    /**
     * @var int 当前页码
     */
    #[Param]
    public int $currentPage;

    /**
     * @var int 总记录数
     */
    #[Param]
    public int $totalCount;

    /**
     * @var array include @see UmengUminiSharePageIndicatorDTO[] $data
     */
    #[ParamArray(class: UMengUminiSharePageIndicatorDTO::class)]
    public array $data;
}
