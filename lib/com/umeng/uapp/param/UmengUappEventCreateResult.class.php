<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUappEventCreateResult
{
    private $status;

    private $msg;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 响应码
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 设置响应码
     * @param int $status
     *
     * 此参数必填     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return 响应信息
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * 设置响应信息.
     * @param string $msg
     *
     * 此参数必填     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('status', $this->stdResult)) {
            $this->status = $this->stdResult->{'status'};
        }
        if (array_key_exists('msg', $this->stdResult)) {
            $this->msg = $this->stdResult->{'msg'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('status', $this->arrayResult)) {
            $this->status = $arrayResult['status'];
        }
        if (array_key_exists('msg', $this->arrayResult)) {
            $this->msg = $arrayResult['msg'];
        }
    }
}
