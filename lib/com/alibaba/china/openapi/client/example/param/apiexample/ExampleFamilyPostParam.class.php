<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
include_once 'com/alibaba/china/openapi/client/example/param/apiexample/ExampleFamily.class.php';
class ExampleFamilyPostParam
{
    private $sdkStdResult = [];

    /**
     * @return 上传Family对象信息
     */
    public function getFamily()
    {
        return $this->sdkStdResult['family'];
    }

    /**
     * 设置上传Family对象信息.
     *
     * @param ExampleFamily $family
     *                              参数示例：<pre></pre>
     *                              此参数必填
     */
    public function setFamily(ExampleFamily $family)
    {
        $this->sdkStdResult['family'] = $family;
    }

    /**
     * @return 备注信息
     */
    public function getComments()
    {
        return $this->sdkStdResult['comments'];
    }

    /**
     * 设置备注信息.
     *
     * @param string $comments
     *                         参数示例：<pre></pre>
     *                         此参数必填
     */
    public function setComments($comments)
    {
        $this->sdkStdResult['comments'] = $comments;
    }

    /**
     * @return 房屋信息
     */
    public function getHouseImg()
    {
        return $this->sdkStdResult['houseImg'];
    }

    /**
     * 设置房屋信息.
     *
     * @param
     *        	array include @see Byte[] $houseImg
     *        	参数示例：<pre></pre>
     *        	此参数必填
     */
    public function setHouseImg($houseImg)
    {
        $this->sdkStdResult['houseImg'] = $houseImg;
    }

    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
