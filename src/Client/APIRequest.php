<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\Client;

class APIRequest
{
    public array $addtionalParams = [];

    public ?string $accessToken = null;

    public function __construct(public APIId $id, public ?ParamInterface $param = null)
    {
    }
}
