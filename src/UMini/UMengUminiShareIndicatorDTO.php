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

class UMengUminiShareIndicatorDTO extends APIParam
{
    /**
     * @var string 时间
     */
    #[Param]
    public string $dateTime;

    /**
     * @var string 回流比
     */
    #[Param]
    public string $reflowRatio;

    /**
     * @var int 分享回流量
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
