<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\Client;

use KY\UMeng\Client\Annotation\Param;

abstract class APIParam implements ParamInterface
{
    public static function makeFromArray(array $items): static
    {
        $ref = new \ReflectionClass(static::class);
        $params = $ref->getProperties();
        $result = new static();
        foreach ($params as $param) {
            $attribute = $param->getAttributes(Param::class)[0] ?? null;
            if (! $attribute) {
                continue;
            }

            /** @var Param $instance */
            $instance = $attribute->newInstance();
            $key = $instance->name ?? $param->getName();
            if (array_key_exists($key, $items)) {
                $result->{$key} = $items[$key];
            }
        }

        return $result;
    }
}
