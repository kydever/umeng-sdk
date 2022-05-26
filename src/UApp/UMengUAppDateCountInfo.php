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

class UMengUAppDateCountInfo extends APIParam
{
    /**
     * @var array 日期数组
     */
    #[Param]
    public array $dates;

    /**
     * @var array 统计数据数组
     */
    #[Param]
    public array $data;
}
