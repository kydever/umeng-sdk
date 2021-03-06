<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUminiEditMiniAppParam
{
    private $sdkStdResult = [];

    /**
     * @return 数据源id（AppKey）
     */
    public function getDataSourceId()
    {
        return $this->sdkStdResult['dataSourceId'];
    }

    /**
     * 设置数据源id（AppKey）.
     * @param string $dataSourceId
     *                             参数示例：<pre>5e8c6dea978eea071c37c682</pre>
     * 此参数必填     */
    public function setDataSourceId($dataSourceId)
    {
        $this->sdkStdResult['dataSourceId'] = $dataSourceId;
    }

    /**
     * @return 平台(不可编辑)
     */
    public function getPlatform()
    {
        return $this->sdkStdResult['platform'];
    }

    /**
     * 设置平台(不可编辑).
     * @param string $platform
     *                         参数示例：<pre>mini_wechat</pre>
     *                         此参数为可选参数
     *
     * 默认值：<pre></pre>
     */
    public function setPlatform($platform)
    {
        $this->sdkStdResult['platform'] = $platform;
    }

    /**
     * @return 应用名称
     */
    public function getName()
    {
        return $this->sdkStdResult['name'];
    }

    /**
     * 设置应用名称.
     * @param string $name
     *                     参数示例：<pre>应用名称</pre>
     *                     此参数为可选参数
     *
     * 默认值：<pre></pre>
     */
    public function setName($name)
    {
        $this->sdkStdResult['name'] = $name;
    }

    /**
     * @return 语言(CN:中文; OTHER:其他)
     */
    public function getLanguage()
    {
        return $this->sdkStdResult['language'];
    }

    /**
     * 设置语言(CN:中文; OTHER:其他).
     * @param string $language
     *                         参数示例：<pre>CN</pre>
     *                         此参数为可选参数
     *
     * 默认值：<pre></pre>
     */
    public function setLanguage($language)
    {
        $this->sdkStdResult['language'] = $language;
    }

    /**
     * @return 一级分类（行业帮助文档：https://developer.umeng.com/docs/147615/detail/169442 ）
     */
    public function getFirstLevel()
    {
        return $this->sdkStdResult['firstLevel'];
    }

    /**
     * 设置一级分类（行业帮助文档：https://developer.umeng.com/docs/147615/detail/169442 ）.
     * @param string $firstLevel
     *                           参数示例：<pre>公共交通与出行</pre>
     *                           此参数为可选参数
     *
     * 默认值：<pre></pre>
     */
    public function setFirstLevel($firstLevel)
    {
        $this->sdkStdResult['firstLevel'] = $firstLevel;
    }

    /**
     * @return 二级分类
     */
    public function getSecondLevel()
    {
        return $this->sdkStdResult['secondLevel'];
    }

    /**
     * 设置二级分类.
     * @param string $secondLevel
     *                            参数示例：<pre>公共交通</pre>
     *                            此参数为可选参数
     *
     * 默认值：<pre></pre>
     */
    public function setSecondLevel($secondLevel)
    {
        $this->sdkStdResult['secondLevel'] = $secondLevel;
    }

    /**
     * @return 描述
     */
    public function getDescription()
    {
        return $this->sdkStdResult['description'];
    }

    /**
     * 设置描述.
     * @param string $description
     *                            参数示例：<pre>描述……</pre>
     *                            此参数为可选参数
     *
     * 默认值：<pre></pre>
     */
    public function setDescription($description)
    {
        $this->sdkStdResult['description'] = $description;
    }

    /**
     * @return 微信/支付宝AppId（不可单独出现，需要和下面参数组队出现）
     */
    public function getMiniAppId()
    {
        return $this->sdkStdResult['miniAppId'];
    }

    /**
     * 设置微信/支付宝AppId（不可单独出现，需要和下面参数组队出现）.
     * @param string $miniAppId
     *                          参数示例：<pre></pre>
     *                          此参数为可选参数
     *
     * 默认值：<pre></pre>
     */
    public function setMiniAppId($miniAppId)
    {
        $this->sdkStdResult['miniAppId'] = $miniAppId;
    }

    /**
     * @return 微信AppSecret（miniAppId和miniAppSecret必须成对出现）
     */
    public function getMiniAppSecret()
    {
        return $this->sdkStdResult['miniAppSecret'];
    }

    /**
     * 设置微信AppSecret（miniAppId和miniAppSecret必须成对出现）.
     * @param string $miniAppSecret
     *                              参数示例：<pre></pre>
     *                              此参数为可选参数
     *
     * 默认值：<pre></pre>
     */
    public function setMiniAppSecret($miniAppSecret)
    {
        $this->sdkStdResult['miniAppSecret'] = $miniAppSecret;
    }

    /**
     * @return 支付宝PublicKey（miniAppId、miniPublicKey和miniPrivateKey必须同时出现）
     */
    public function getMiniPublicKey()
    {
        return $this->sdkStdResult['miniPublicKey'];
    }

    /**
     * 设置支付宝PublicKey（miniAppId、miniPublicKey和miniPrivateKey必须同时出现）.
     * @param string $miniPublicKey
     *                              参数示例：<pre></pre>
     *                              此参数为可选参数
     *
     * 默认值：<pre></pre>
     */
    public function setMiniPublicKey($miniPublicKey)
    {
        $this->sdkStdResult['miniPublicKey'] = $miniPublicKey;
    }

    /**
     * @return 支付宝PrivateKey（miniAppId、miniPublicKey和miniPrivateKey必须同时出现）
     */
    public function getMiniPrivateKey()
    {
        return $this->sdkStdResult['miniPrivateKey'];
    }

    /**
     * 设置支付宝PrivateKey（miniAppId、miniPublicKey和miniPrivateKey必须同时出现）.
     * @param string $miniPrivateKey
     *                               参数示例：<pre></pre>
     *                               此参数为可选参数
     *
     * 默认值：<pre></pre>
     */
    public function setMiniPrivateKey($miniPrivateKey)
    {
        $this->sdkStdResult['miniPrivateKey'] = $miniPrivateKey;
    }

    /**
     * @return 集成类型；单应用小程序集成：single、小程序模版类应用集成 ：template
     */
    public function getIntegrationType()
    {
        return $this->sdkStdResult['integrationType'];
    }

    /**
     * 设置集成类型；单应用小程序集成：single、小程序模版类应用集成 ：template.
     * @param string $integrationType
     *                                参数示例：<pre>single</pre>
     *                                此参数为可选参数
     *
     * 默认值：<pre>single</pre>
     */
    public function setIntegrationType($integrationType)
    {
        $this->sdkStdResult['integrationType'] = $integrationType;
    }

    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
