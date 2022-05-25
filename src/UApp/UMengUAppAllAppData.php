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

class UMengUAppAllAppData extends APIParam
{
    /**
     * @var int 今日活跃用户
     */
    #[Param]
    public int $todayActivityUsers;

    /**
     * @var int 今日新增用户
     */
    #[Param]
    public int $todayNewUsers;

    /**
     * @var int 今日启动次数
     */
    #[Param]
    public int $todayLaunches;

    /**
     * @var int 昨日活跃用户
     */
    #[Param]
    public int $yesterdayActivityUsers;

    /**
     * @var int 昨日新增用户
     */
    #[Param]
    public int $yesterdayNewUsers;

    /**
     * @var int 昨日启动次数
     */
    #[Param]
    public int $yesterdayLaunches;

    /**
     * @var int 昨日独立新增用户数
     */
    #[Param]
    public int $yesterdayUniqNewUsers;

    /**
     * @var int 昨日独立活跃用户数
     */
    #[Param]
    public int $yesterdayUniqActiveUsers;

    /**
     * @var int 总用户数
     */
    #[Param]
    public int $totalUsers;
}
