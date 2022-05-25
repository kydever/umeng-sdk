<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UApp;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\Annotation\ParamArray;
use KY\UMeng\Client\APIParam;

class UmengUappGetAppListResult extends APIParam
{
    /**
     * @var UmengUappAppInfoData[]
     */
    #[ParamArray(class: UmengUappAppInfoData::class)]
    public array $appInfos = [];

    /**
     * @var int 总页数
     */
    #[Param]
    public int $totalPage;

    /**
     * @var int 页数
     */
    #[Param]
    public int $page;
}
