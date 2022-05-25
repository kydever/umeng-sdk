<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengApptrackBackReportDataResult
{
    private $result;

    private $stdResult;

    private $arrayResult;

    /**
     * @return
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * 设置.
     * @param bool $result
     *
     * 此参数必填     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('result', $this->stdResult)) {
            $this->result = $this->stdResult->{'result'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('result', $this->arrayResult)) {
            $this->result = $arrayResult['result'];
        }
    }
}
