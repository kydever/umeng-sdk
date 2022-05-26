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

class UMengUAppParamInfo extends APIParam
{
    /**
     * @var string 参数ID
     */
    #[Param]
    public string $paramId;

    /**
     * @var string 参数名称
     */
    #[Param]
    public string $name;

    /**
     * @var string 参数显示名称
     */
    #[Param]
    public string $displayName;
}
