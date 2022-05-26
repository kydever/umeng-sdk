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

class UMengUAppDailyDataInfo extends APIParam
{
    /**
     * @var string 统计日期
     */
    #[Param]
    public string $date;

    /**
     * @var int 活跃用户数
     */
    #[Param]
    public int $activityUsers;

    /**
     * @var int 总用户数
     */
    #[Param]
    public int $totalUsers;

    /**
     * @var int 启动数
     */
    #[Param]
    public int $launches;

    /**
     * @var int 新增用户数
     */
    #[Param]
    public int $newUsers;

    /**
     * @var int 游戏付费用户数（仅游戏sdk）
     */
    #[Param]
    public int $payUsers;
}
