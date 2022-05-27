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

class UMengUAppGetDailyDataParam extends APIParam
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
     * @var string 版本名称（选填，仅一次一个）
     */
    #[Param]
    public string $version = '';

    /**
     * @var string 渠道名称
     */
    #[Param]
    public string $channel = '';
}
