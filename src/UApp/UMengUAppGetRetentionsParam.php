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

class UMengUAppGetRetentionsParam extends APIParam
{
    /**
     * @var string 应用ID
     */
    #[Param(name: 'appkey')]
    public string $key;

    /**
     * @var string 查询起始日期 2022-01-01
     */
    #[Param]
    public string $startDate;

    /**
     * @var string 查询截止日期 2022-01-01
     */
    #[Param]
    public string $endDate;

    /**
     * @var string 查询类型（按日daily,按周weekly,按月monthly 查询）
     */
    #[Param]
    public string $periodType = 'daily';

    /**
     * @var string 渠道名称（仅限一个App%20Store）
     */
    #[Param]
    public string $channel = '';

    /**
     * @var string 版本名称（1.0.0）
     */
    #[Param]
    public string $version = '';

    /**
     * @var string
     *             newUser(默认):新增用户留存率
     *             activeUser:活跃用户留存率
     */
    #[Param]
    public string $type = '';
}
