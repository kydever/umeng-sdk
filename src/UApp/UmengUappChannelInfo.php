<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UApp;

use KY\UMeng\Client\Annotation\Param;

class UmengUappChannelInfo
{
    /**
     * @var int 启动数（昨日及以前可查询）
     */
    #[Param]
    public int $launch;

    /**
     * @var string 使用时长（昨日及以前可查询）
     */
    #[Param]
    public string $duration;

    /**
     * @var string 日期
     */
    #[Param]
    public string $date;

    /**
     * @var float 当前渠道总用户数在总用户数中的比例
     */
    #[Param]
    public float $totalUserRate;

    /*#
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
     * @var int 总用户数
     */
    #[Param]
    public int $totalUser;

    /**
     * @var string 渠道名称
     */
    #[Param]
    public string $channel;

    /**
     * @var string 渠道ID
     */
    #[Param]
    public string $id;
}
