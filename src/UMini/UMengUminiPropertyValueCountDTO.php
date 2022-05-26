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

class UMengUminiPropertyValueCountDTO extends APIParam
{
    /**
     * @var int 触发次数
     */
    #[Param]
    public int $count;

    /**
     * @var string 属性值
     */
    #[Param]
    public string $propertyValue;

    /**
     * @var float 触发次数占比
     */
    #[Param]
    public float $countRatio;
}
