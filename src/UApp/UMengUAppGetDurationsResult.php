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

class UMengUAppGetDurationsResult extends APIParam
{
    /**
     * @var UMengUAppDurationInfo[]
     */
    #[Param]
    public array $durationInfos;

    /**
     * @var float 每次启动的平均使用时长
     */
    #[Param]
    public float $average;
}
