<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\APIParam;

class UMengUMiniEditPathDisplayNameParam extends APIParam
{
    /**
     * @var string 数据源id（AppKey）
     */
    public string $dataSourceId;

    /**
     * @var string 页面别名
     */
    public string $displayName;

    /**
     * @var string 页面URL地址
     */
    public string $path;
}
