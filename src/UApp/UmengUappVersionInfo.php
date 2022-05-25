<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UApp;

use KY\UMeng\Client\Annotation\Param;

class UmengUappVersionInfo
{
    /**
     * @var string 统计日期
     */
    #[Param]
    public string $date;

    /**
     * @var float 当前版本总用户数在总用户数中的比例
     */
    #[Param]
    public float $totalUserRate;

    /**
     * @var int 活跃用户
     */
    #[Param]
    public int $activeUser;

    /**
     * @var int 新增用户
     */
    #[Param]
    public int $newUser;

    /**
     * @var int 当前版本总用户数
     */
    #[Param]
    public int $totalUser;

    /**
     * @var string 版本号
     */
    #[Param]
    public string $version;
}
