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

class UMengUMiniEditPathDisplayNameParam extends APIParam
{
    /**
     * @var array [
     *            'dataSourceId'=>' string 设置数据源id（AppKey）',
     *            'displayName'=>' string 页面别名',
     *            'path'=>' string 页面URL地址',
     *            ]
     */
    #[Param]
    public array $sdkStdResult;
}
