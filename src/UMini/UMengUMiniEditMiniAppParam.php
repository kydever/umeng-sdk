<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\APIParam;

class UMengUMiniEditMiniAppParam extends APIParam
{
    /**
     * @var string 数据源id（AppKey）
     */
    public string $dataSourceId;

    /**
     * @var string 平台( 支付宝小程序：mini_alipay；微信小程序：mini_wechat；天猫精灵：mini_tmall_genie；微信小游戏：mini_game_wechat；字节跳动小程序：mini_bytedance；百度小程序：mini_baidu；QQ小程序：mini_qq )
     */
    public string $platform = '';

    /**
     * @var string 应用名称
     */
    public string $name = '';

    /**
     * @var string 语言(CN:中文; OTHER:其他)
     */
    public string $language = '';

    /**
     * @var string 一级分类（行业帮助文档：https://developer.umeng.com/docs/147615/detail/169442 ）
     */
    public string $firstLevel = '';

    /**
     * @var string 二级分类 参考一级分类
     */
    public string $secondLevel = '';

    /**
     * @var string 描述
     */
    public string $description = '';

    /**
     * @var string 微信/支付宝AppId（不可单独出现，需要和下面参数组队出现）
     */
    public string $miniAppId = '';

    /**
     * @var string 微信AppSecret（miniAppId和miniAppSecret必须成对出现）
     */
    public string $miniAppSecret = '';

    /**
     * @var string 支付宝PublicKey（miniAppId、miniPublicKey和miniPrivateKey必须同时出现）
     */
    public string $miniPublicKey = '';

    /**
     * @var string 支付宝PrivateKey（miniAppId、miniPublicKey和miniPrivateKey必须同时出现）
     */
    public string $miniPrivateKey = '';

    /**
     * @var string 集成类型；单应用小程序集成：single、小程序模版类应用集成 ：template
     */
    public string $integrationType = 'single';
}
