<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
class APIId
{
    /**
     * namespace of API, it is required.
     *
     * @var string
     */
    public $namespace;

    /**
     * name of API, it is required.
     * @var string
     */
    public $name;

    /**
     * version of API, optional.
     * If not setup, the default version defined in requestPolicy is used.
     * @var int
     */
    public $version;

    public function APIId($namespace, $name, $version)
    {
        $this->namespace = $namespace;
        $this->name = $name;
        $this->version = $version;
    }
}
