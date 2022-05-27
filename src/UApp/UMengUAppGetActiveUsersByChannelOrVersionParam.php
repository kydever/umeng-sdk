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

class UMengUAppGetActiveUsersByChannelOrVersionParam extends APIParam
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
     * @var string 渠道名称（需要urlEncode转义，例如：App%20Store）
     */
    #[Param]
    public string $channels = '';

    /**
     * @var string 版本名称（需要urlEncode转义，例如:1.0.0）
     */
    #[Param]
    public string $versions = '';
}
