<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\Client\Exception;

use RuntimeException;

class OceanException extends RuntimeException
{
    private string $errorCode;

    public function setErrorCode(string $errorCode)
    {
        $this->errorCode = $errorCode;
    }

    public function getErrorCode(): string
    {
        return $this->errorCode;
    }
}
