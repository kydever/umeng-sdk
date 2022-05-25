<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
class ExampleFamilyGetParam
{
    private $sdkStdResult = [];

    /**
     * @return 可接受参数1或者2，其余参数无法找到family对象
     */
    public function getFamilyNumber()
    {
        return $this->sdkStdResult['familyNumber'];
    }

    /**
     * 设置可接受参数1或者2，其余参数无法找到family对象
     *
     * @param int $familyNumber
     *                          参数示例：<pre></pre>
     *                          此参数必填
     */
    public function setFamilyNumber($familyNumber)
    {
        $this->sdkStdResult['familyNumber'] = $familyNumber;
    }

    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
