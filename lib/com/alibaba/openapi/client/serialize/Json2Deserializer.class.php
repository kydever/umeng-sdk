<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/serialize/DeSerializer.php';
include_once 'com/alibaba/openapi/client/exception/OceanException.class.php';
class Json2Deserializer implements DeSerializer
{
    public function supportedContentType()
    {
        return DataProtocol::json2;
    }

    public function deSerialize($deSerializer, $resultDefinition, $charSet = null)
    {
        $stdResult = json_decode($deSerializer);
        $resultDefinition->setStdResult($stdResult);
        return $resultDefinition;
    }

    public function buildException($deSerializer, $resultType, $charSet = null)
    {
        $exceptionStdResult = json_decode($deSerializer);
        $errorCode = $exceptionStdResult->{'error_code'};
        $errorMessage = $exceptionStdResult->{'error_message'};

        $oceanException = new OceanException($errorMessage);
        $oceanException->setErrorCode($errorCode);
        return $oceanException;
    }
}
