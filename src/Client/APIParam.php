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
use KY\UMeng\Client\Entity\ByteArray;
use KY\UMeng\Client\Util\DateUtil;
use KY\UMeng\Client\Util\Json;

abstract class APIParam implements ParamInterface
{
    public static function makeFromArray(array $items): static
    {
        $ref = new \ReflectionClass(static::class);
        $params = $ref->getProperties();

        /* @phpstan-ignore-next-line */
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

    public function toArray(): array
    {
        $ref = new \ReflectionClass(static::class);
        $params = $ref->getProperties();
        $result = [];
        foreach ($params as $param) {
            foreach ($param->getAttributes() as $attribute) {
                /** @var Param $instance */
                $instance = $attribute->newInstance();
                $key = $instance->name ?? $param->getName();

                if ($instance instanceof Param) {
                    $data = $this->{$param->getName()};
                    if ($data instanceof \DateTime) {
                        $timeValue = $data->getTimestamp();
                        $data = DateUtil::parseToString($timeValue);
                    } elseif ($data instanceof ByteArray) {
                        $data = base64_encode($data->getByteValue());
                    } elseif ($data instanceof ParamInterface) {
                        $data = $data->toArray();
                    } elseif (is_array($data)) {
                        $data = Json::encode($data);
                    }

                    $result[$key] = $data;
                }
            }
        }

        return $result;
    }
}
