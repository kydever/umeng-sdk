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

class UMengUminiShareUserDTO extends APIParam
{
    /**
     * @var float 分享回流比
     */
    #[Param]
    public float $reflowRatio;

    /**
     * @var string 头像URL
     */
    #[Param]
    public string $avatarUrl;

    /**
     * @var int 用户回流量
     */
    #[Param]
    public int $reflow;

    /**
     * @var string 用户名
     */
    #[Param]
    public string $nickName;

    /**
     * @var int 分享新增
     */
    #[Param]
    public int $newUser;

    /**
     * @var int 分享回流量
     */
    #[Param]
    public int $count;

    /**
     * @var int 用户ID
     */
    #[Param]
    public int $userId;
}
