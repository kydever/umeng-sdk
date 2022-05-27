<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UApp;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\APIParam;

class UMengUAppEventListResult extends APIParam
{
    #[Param]
    public UMengUAppEventInfo $eventInfo;

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
