<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUappGetAppCountResult
{
    private $count;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 应用数量
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * 设置应用数量.
     * @param int $count
     *
     * 此参数必填     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('count', $this->stdResult)) {
            $this->count = $this->stdResult->{'count'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('count', $this->arrayResult)) {
            $this->count = $arrayResult['count'];
        }
    }
}
