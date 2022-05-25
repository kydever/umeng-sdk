<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\Client;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\Annotation\ParamArray;

abstract class APIParam implements ParamInterface
{
    public static function makeFromArray(array $items): static
    {
        $ref = new \ReflectionClass(static::class);
        $params = $ref->getProperties();
        $result = new static();
        foreach ($params as $param) {
            foreach ($param->getAttributes() as $attribute) {
                /** @var Param|ParamArray $instance */
                $instance = $attribute->newInstance();
                $key = $instance->name ?? $param->getName();

                if ($instance instanceof Param) {
                    if (array_key_exists($key, $items)) {
                        $result->{$key} = $items[$key];
                    }
                } elseif ($instance instanceof ParamArray) {
                    $subClass = $instance->class;
                    if (array_key_exists($key, $items)) {
                        $data = [];
                        foreach ($items[$key] ?? [] as $item) {
                            $data[] = $subClass::makeFromArray($item);
                        }
                        $result->{$key} = $data;
                    }
                }
            }
        }

        return $result;
    }
}
