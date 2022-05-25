<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
class ClientPolicy
{
    public $serverHost;

    public $httpPort = 80;

    public $httpsPort = 443;

    public $appKey;

    public $secKey;

    public $defaultContentCharset = 'UTF-8';

    public function __construct($apiKey = '', $secKey = '', $serverHost = '')
    {
        $this->appKey = $apiKey;
        $this->secKey = $secKey;
        $this->serverHost = $serverHost;
    }
}
