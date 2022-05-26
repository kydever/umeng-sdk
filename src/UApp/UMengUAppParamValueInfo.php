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

class UMengUAppParamValueInfo extends APIParam
{
    /**
     * @var string 参数值名称
     */
    #[Param]
    public string $name;

    /**
     * @var int 统计的消息数
     */
    #[Param]
    public int $count;

    /**
     * @var float 当前事件下此参数值消息数的占比
     */
    #[Param]
    public float $percent;
}
