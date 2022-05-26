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

class UMengUMiniAppIndicatorDTO extends APIParam
{
    /**
     * @var string 时间
     */
    #[Param]
    public string $dateTime;

    /**
     * @var int 新增用户
     */
    #[Param]
    public int $newUser;

    /**
     * @var int 活跃用户
     */
    #[Param]
    public int $activeUser;

    /**
     * @var int 打开次数
     */
    #[Param]
    public int $launch;

    /**
     * @var int 页面访问次数
     */
    #[Param]
    public int $visitTimes;

    /**
     * @var string 次均停留时长
     */
    #[Param]
    public string $onceDuration;

    /**
     * @var string 人均停留时长
     */
    #[Param]
    public string $dailyDuration;
}
