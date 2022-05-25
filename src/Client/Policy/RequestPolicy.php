<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\Client\Policy;

class RequestPolicy
{
    public function __construct(
        public bool $requestSendTimestamp = false,
        public bool $useHttps = false,
        public string $requestProtocol = DataProtocol::PARAM2,
        public string $responseProtocol = DataProtocol::PARAM2,
        public bool $responseCompress = true,
        public int $requestCompressThreshold = -1,
        public int $timeout = 5000,
        public string $httpMethod = 'POST',
        public string $queryStringCharset = 'GB18030',
        public string $contentCharset = 'UTF-8',
        public bool $useSignature = true,
        public bool $needAuthorization = false,
        public bool $accessPrivateApi = false,
        public int $defaultApiVersion = 1
    ) {
    }
}
