<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\APIParam;

class UMengUMiniMultiIndiceDTO extends APIParam
{
    /**
     * @var string 修改时间
     */
    #[Param]
    public string $gmtModified;

    /**
     * @var string 指标ID
     */
    #[Param]
    public string $indicesId;

    /**
     * @var string 指标类型（触发用户数：event_device，触发次数：event_count，累计值：property_num_sum）
     */
    #[Param]
    public string $code;

    /**
     * @var string 属性名
     */
    #[Param]
    public string $propertyName;

    /**
     * @var string 指标名
     */
    #[Param]
    public string $displayName;

    /**
     * @var string 事件名称
     */
    #[Param]
    public string $eventName;
}
