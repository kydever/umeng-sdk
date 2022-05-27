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

class UMengUAppCreateAppParam extends APIParam
{
    /**
     * @var string 名称
     */
    #[Param]
    public string $name;

    /**
     * @var string 类型 app:应用
     */
    #[Param]
    public string $type;

    /**
     * @var string 平台 iphone:iPhone; ipad:iPad; android:Android; wphone:WinPhone; h5app:HTML5;
     */
    #[Param]
    public string $platform;

    /**
     * @var string 语言 CN:中文; OTHER:其他
     */
    #[Param]
    public string $language;

    /**
     * @var string 一级分类，帮助文档：https://developer.umeng.com/docs/119267/detail/183761
     */
    #[Param]
    public string $firstLevel;

    /**
     * @var string 二级分类，帮助文档同上
     */
    #[Param]
    public string $secondLevel;

    /**
     * @var string 描述
     */
    #[Param]
    public string $description = '';
}
