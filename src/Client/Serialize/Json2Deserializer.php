<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\Client\Serialize;

use KY\UMeng\Client\Exception\OceanException;
use KY\UMeng\Client\Policy\DataProtocol;
use KY\UMeng\Client\Util\Json;

class Json2Deserializer implements DeSerializer
{
    public function supportedContentType()
    {
        return DataProtocol::JSON2;
    }

    public function deSerialize(string $deSerializer, string $resultType, $charSet = null)
    {
        $result = Json::decode($deSerializer);

        return $resultType::makeFromArray($result);
    }

    public function buildException($deSerializer, $resultType, $charSet = null)
    {
        $result = Json::decode($deSerializer);

        $oceanException = new OceanException($result['error_message'] ?? '0');
        $oceanException->setErrorCode($result['error_code'] ?? '0');
        return $oceanException;
    }
}
