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

class UMengUMiniVisitPageDTO extends APIParam
{
    /**
     * @var string 页面备注
     */
    #[Param]
    public string $displayName;

    /**
     * @var string 平均页面访问时长
     */
    #[Param]
    public string $pageDuration;

    /**
     * @var string 页面URL
     */
    #[Param]
    public string $page;

    /**
     * @var int 页面访问用户数
     */
    #[Param]
    public int $visitUser;

    /**
     * @var int 页面访问次数
     */
    #[Param]
    public int $visitTimes;
}
