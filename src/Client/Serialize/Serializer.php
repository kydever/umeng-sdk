<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\Client\Serialize;

interface Serializer
{
    public function supportedContentType();

    public function serialize(object $serializer);
}
