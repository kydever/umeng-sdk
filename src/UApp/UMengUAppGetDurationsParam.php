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

class UMengUAppGetDurationsParam extends APIParam
{
    /**
     * @var string 应用ID
     */
    #[Param(name: 'appkey')]
    public string $key;

    /**
     * @var string 查询日期
     */
    #[Param]
    public string $date;

    /**
     * @var string 查询时长统计类型（按天daily，按次daily_per_launch）
     */
    #[Param]
    public string $statType = 'daily';

    /**
     * @var string 渠道名称（仅限一个App%20Store）
     */
    #[Param]
    public string $channel = '';

    /**
     * @var string 版本名称（仅限一个1.0.0）
     */
    #[Param]
    public string $version = '';
}
