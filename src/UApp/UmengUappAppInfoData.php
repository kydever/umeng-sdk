<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UApp;

use KY\UMeng\Client\Annotation\Param;

class UmengUappAppInfoData
{
    /**
     * @var string 创建时间
     */
    #[Param]
    public string $createdAt;

    /**
     * @var string 更新时间
     */
    #[Param]
    public string $updatedAt;

    /**
     * @var bool 是否为游戏
     */
    #[Param]
    public bool $useGameSdk;

    /**
     * @var string App名称
     */
    #[Param]
    public string $name;

    /*#
     * @var string 应用ID
     */
    #[Param]
    public string $appkey;

    /**
     * @var string 类别
     */
    #[Param]
    public string $category;

    /**
     * @var int 是否关注
     */
    #[Param]
    public int $popular;

    /**
     * @var string 平台(iphone,android)
     */
    #[Param]
    public string $platform;
}
