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

class UMengUMiniEditMiniAppParam extends APIParam
{
    /**
     * @var array [
     *            'dataSourceId'=>' string 设置数据源id（AppKey）',
     *            'platform'=>' string 平台(不可编辑)',
     *            'name'=>' string 应用名称',
     *            'language'=>' string 语言(CN:中文; OTHER:其他)',
     *            'firstLevel'=>' string 一级分类（行业帮助文档：https://developer.umeng.com/docs/147615/detail/169442 ）',
     *            'secondLevel'=>' string 二级分类',
     *            'description'=>' string 描述',
     *            'miniAppId'=>' string 微信/支付宝AppId（不可单独出现，需要和下面参数组队出现）',
     *            'miniAppSecret'=>' string 微信AppSecret（miniAppId和miniAppSecret必须成对出现）',
     *            'miniPublicKey'=>' string 支付宝PublicKey（miniAppId、miniPublicKey和miniPrivateKey必须同时出现）',
     *            'miniPrivateKey'=>' string 支付宝PrivateKey（miniAppId、miniPublicKey和miniPrivateKey必须同时出现）',
     *            'integrationType'=>' string 集成类型；单应用小程序集成：single、小程序模版类应用集成 ：template',
     *            ]
     */
    #[Param]
    public array $sdkStdResult;
}
