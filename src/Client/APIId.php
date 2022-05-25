<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\Client;

class APIId
{
    /**
     * @param null|int $version if not setup, the default version defined in requestPolicy is used
     */
    public function __construct(
        public string $namespace,
        public string $name,
        public ?int $version = null
    ) {
    }
}
