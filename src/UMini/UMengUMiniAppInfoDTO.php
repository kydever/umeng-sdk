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

class UMengUMiniAppInfoDTO extends APIParam
{
    /**
     * @var string 二级分类
     */
    #[Param]
    public string $secondLevel;

    /**
     * @var string 数据源id
     */
    #[Param]
    public string $dataSourceId;

    /**
     * @var string 数据源名称
     */
    #[Param]
    public string $appName;

    /**
     * @var string 创建时间
     */
    #[Param]
    public string $gmtCreate;

    /**
     * @var string 一级分类
     */
    #[Param]
    public string $firstLevel;

    /**
     * @var string 用户名
     */
    #[Param]
    public string $userName;

    /**
     * @var string 小程序平台
     */
    #[Param]
    public string $platform;
}
