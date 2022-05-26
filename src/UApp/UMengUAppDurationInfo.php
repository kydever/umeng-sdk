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

class UMengUAppDurationInfo extends APIParam
{
    /**
     * @var string 时间区间单位秒
     */
    #[Param]
    public string $name;

    /**
     * @var int 启动次数/用户数
     */
    #[Param]
    public int $value;

    /**
     * @var float 此区间的时长占
     */
    #[Param]
    public float $percent;
}
