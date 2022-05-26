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

class UMengUMiniLandingPageDTO extends APIParam
{
    /**
     * @var string 页面URL
     */
    #[Param]
    public string $page;

    /**
     * @var string 页面备注
     */
    #[Param]
    public string $displayName;

    /**
     * @var int 入口页次数
     */
    #[Param]
    public int $visitTimes;

    /**
     * @var int 入口页人数
     */
    #[Param]
    public int $visitUser;

    /**
     * @var string 跳出率
     */
    #[Param]
    public string $jumpRatio;
}
