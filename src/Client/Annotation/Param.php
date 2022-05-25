<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\Client\Annotation;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class Param
{
    public function __construct(public ?string $name = null)
    {
    }
}
