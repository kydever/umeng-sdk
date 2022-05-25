<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
class ByteArray
{
    private $bytesValue;

    public function setBytesValue($bytesValue)
    {
        $this->bytesValue = $bytesValue;
    }

    public function getByteValue()
    {
        return $this->bytesValue;
    }
}
