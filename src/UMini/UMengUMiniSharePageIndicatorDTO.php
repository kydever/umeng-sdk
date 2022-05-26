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

class UMengUMiniSharePageIndicatorDTO extends APIParam
{
    /**
     * @var float 分享回流比
     */
    #[Param]
    public float $reflowRatio;

    /**
     * @var string 页面url
     */
    #[Param]
    public string $path;

    /**
     * @var int 分享回流
     */
    #[Param]
    public int $reflow;

    /**
     * @var int 分享新增
     */
    #[Param]
    public int $newUser;

    /**
     * @var int 分享次数
     */
    #[Param]
    public int $count;

    /**
     * @var int 分享人数
     */
    #[Param]
    public int $user;
}
