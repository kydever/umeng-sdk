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

class UMengUMiniCustomerSourceDTO extends APIParam
{
    /**
     * @var string 设置id
     */
    #[Param]
    public string $id;

    /**
     * @var string 名称
     */
    #[Param]
    public string $name;

    /**
     * @var string URL(仅推广活动可用)
     */
    #[Param]
    public string $url;

    /**
     * @var string 次均停留时长
     */
    #[Param]
    public string $onceDuration;

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
     * @var string 创建时间(仅推广活动可用)
     */
    #[Param]
    public string $createDateTime;
}
