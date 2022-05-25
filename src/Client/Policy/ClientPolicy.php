<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\Client\Policy;

class ClientPolicy
{
    public int $httpPort = 80;

    public int $httpsPort = 443;

    public string $defaultContentCharset = 'UTF-8';

    public function __construct(public string $key = '', public string $secret = '', public string $host = '')
    {
    }
}
