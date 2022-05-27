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

class UMengUAppEventCreateParam extends APIParam
{
    /**
     * @var string 应用ID
     */
    #[Param(name: 'appkey')]
    public string $key;

    /**
     * @var string 自定义事件名（英文和数字，不允许特殊符号?/.\<>）
     */
    #[Param]
    public string $eventName;

    /**
     * @var string 自定义事件显示名（中文，英文和数字，不允许特殊符号?/.\<>）
     */
    #[Param]
    public string $eventDisplayName;

    /**
     * @var bool
     *           true: 计算事件（数值型），用于统计数值型变量的累计值、均值及分布。false
     *           false: 计数事件（字符串型），用于统计字符串型变量的消息数及触发设备数。
     */
    #[Param]
    public bool $eventType = false;
}
