<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\Client\Serialize;

class SerializerProvider
{
    private static $serializerStore = [];

    private static $deSerializerStore = [];

    private static $isInited = false;

    public static function getSerializer($key)
    {
        if (! SerializerProvider::$isInited) {
            SerializerProvider::initial();
        }
        return SerializerProvider::$serializerStore[$key];
    }

    public static function getDeSerializer($key)
    {
        if (! SerializerProvider::$isInited) {
            SerializerProvider::initial();
        }
        return SerializerProvider::$deSerializerStore[$key];
    }

    private static function initial()
    {
        SerializerProvider::$serializerStore[DataProtocol::param2] = new Param2RequestSerializer();
        SerializerProvider::$deSerializerStore[DataProtocol::json2] = new Json2Deserializer();
        SerializerProvider::$deSerializerStore[DataProtocol::param2] = new Json2Deserializer();
        $isInited = true;
    }
}
