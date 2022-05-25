<?php

declare(strict_types=1);

/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\Client\Entity;

class ByteArray
{
    private string $bytesValue;

    public function setBytesValue(string $bytesValue)
    {
        $this->bytesValue = $bytesValue;
    }

    public function getByteValue(): string
    {
        return $this->bytesValue;
    }
}
