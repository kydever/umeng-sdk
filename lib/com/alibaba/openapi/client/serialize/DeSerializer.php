<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
interface DeSerializer
{
    public function supportedContentType();

    public function deSerialize($deSerializer, $resultType, $charSet);

    public function buildException($deSerializer, $resultType, $charSet);
}
