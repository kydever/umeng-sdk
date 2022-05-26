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

class UMengUAppCountDataNameValue extends APIParam
{
    /**
     * @var string 版本或渠道名
     */
    #[Param]
    public string $name;

    /**
     * @var int 统计数
     */
    #[Param]
    public int $value;
}
