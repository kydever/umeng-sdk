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

class UMengUAppActiveAccountInfo extends APIParam
{
    /**
     * @var string 统计日期
     */
    #[Param]
    public string $date;

    /**
     * @var int 活跃用户
     */
    #[Param]
    public int $activeUser;

    /**
     * @var int 活跃账号
     */
    #[Param]
    public int $activeAccount;
}
