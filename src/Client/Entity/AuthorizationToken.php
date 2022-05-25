<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\Client\Entity;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\APIParam;

class AuthorizationToken extends APIParam
{
    #[Param('access_token')]
    public string $accessToken;

    #[Param('refresh_token')]
    public string $refreshToken;

    #[Param('expires_in')]
    public int $expiresIn;

    #[Param('expires_time')]
    public int $expiresTime;

    #[Param('refresh_token_timeout')]
    public int $refreshTokenTimeout;

    #[Param('resource_owner')]
    public string $resourceOwner;

    #[Param()]
    public int $uid;

    #[Param()]
    public int $aliId;

    #[Param()]
    public int $memberId;
}
