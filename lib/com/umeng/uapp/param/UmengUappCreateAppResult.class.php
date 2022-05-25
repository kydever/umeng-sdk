<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';

class UmengUappCreateAppResult
{
    private $code;

    private $success;

    private $data;

    private $msg;

    private $stdResult;

    private $arrayResult;

    /**
     * @return 状态码
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * 设置状态码
     * @param Long $code
     *
     * 此参数必填     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return 状态
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * 设置状态
     * @param bool $success
     *
     * 此参数必填     */
    public function setSuccess($success)
    {
        $this->success = $success;
    }

    /**
     * @return 成功时返回新建应用key
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * 设置成功时返回新建应用key.
     * @param string $data
     *
     * 此参数必填     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return 返回消息
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * 设置返回消息.
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
        if (array_key_exists('code', $this->stdResult)) {
            $this->code = $this->stdResult->{'code'};
        }
        if (array_key_exists('success', $this->stdResult)) {
            $this->success = $this->stdResult->{'success'};
        }
        if (array_key_exists('data', $this->stdResult)) {
            $this->data = $this->stdResult->{'data'};
        }
        if (array_key_exists('msg', $this->stdResult)) {
            $this->msg = $this->stdResult->{'msg'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('code', $this->arrayResult)) {
            $this->code = $arrayResult['code'];
        }
        if (array_key_exists('success', $this->arrayResult)) {
            $this->success = $arrayResult['success'];
        }
        if (array_key_exists('data', $this->arrayResult)) {
            $this->data = $arrayResult['data'];
        }
        if (array_key_exists('msg', $this->arrayResult)) {
            $this->msg = $arrayResult['msg'];
        }
    }
}
