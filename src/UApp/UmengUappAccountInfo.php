<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UApp;

use KY\UMeng\Client\Annotation\Param;

class UmengUappAccountInfo
{
    /**
     * @var string 统计日期
     */
    #[Param]
    public string $date;

    /**
     * @var int 新增用户
     */
    #[Param]
    public int $newUser;

    /**
     * @var int 新增账号
     */
    #[Param]
    public int $newAccount;

    /**
     * @var array 小时新增用户（按小时查询时）
     */
    #[Param]
    public array $hourNewUser;

    /**
     * @var array 小时新增账号（按小时查询时）
     */
    #[Param]
    public array $hourNewAccount;
}
