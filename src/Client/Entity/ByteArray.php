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
    private array $bytesValue;

    public function setBytesValue(array $bytesValue)
    {
        $this->bytesValue = $bytesValue;
    }

    public function getByteValue(): array
    {
        return $this->bytesValue;
    }
}
