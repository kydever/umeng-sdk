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

class UmengUappEventListResult extends APIParam
{
    /**
     * @var UmengUappEventInfo[]
     */
    #[ParamArray(class: UmengUappEventInfo::class)]
    public array $eventInfo = [];

    /**
     * @var int 页数
     */
    #[Param]
    public int $page;

    /**
     * @var int 总页数
     */
    #[Param]
    public int $totalPage;
}
