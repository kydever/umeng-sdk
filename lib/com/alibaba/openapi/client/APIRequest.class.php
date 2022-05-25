<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
class APIRequest
{
    /**
     * @var APIId
     */
    public $apiId;

    /**
     * @var map
     */
    public $addtionalParams = [];

    /**
     * @var base on request parameter object
     */
    public $requestEntity;

    /**
     * @var map
     */
    public $attachments = [];

    /**
     * @var string
     */
    public $authCodeKey;

    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var AuthorizationToken
     */
    public $authToken;
}
