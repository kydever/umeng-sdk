<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
class APIResponse
{
    /**
     * status code.
     *
     * @var int
     */
    public $statusCode;

    /**
     * result of api, the type base on the calling API defination.
     *
     * @var unknown
     */
    public $result;

    /**
     * exception if there are some error when calling API.
     *
     * @var unknown
     */
    public $exception;

    /**
     * respponse charset.
     *
     * @var string
     */
    public $charset = 'UTF-8';

    /**
     * response encoding.
     *
     * @var string
     */
    public $encoding;

    /**
     * the response wrapper, maybe API return addtional information(e.g.
     * calling cost time), the wrapper include those information.
     *
     * @var unknown
     */
    public $responseWrapper;
}
