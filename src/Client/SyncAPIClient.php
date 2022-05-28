<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\Client;

use KY\UMeng\Client\Policy\ClientPolicy;
use KY\UMeng\Client\Policy\RequestPolicy;
use KY\UMeng\Client\Serialize\SerializerProvider;
use KY\UMeng\Client\Util\DateUtil;
use KY\UMeng\Client\Util\SignatureUtil;

class SyncAPIClient
{
    public function __construct(public ClientPolicy $clientPolicy)
    {
    }

    public function send(APIRequest $request, string $resultClass, RequestPolicy $requestPolicy)
    {
        $urlRequest = $this->generateRequestPath($request, $requestPolicy, $this->clientPolicy);
        if ($requestPolicy->useHttps) {
            if ($this->clientPolicy->httpsPort == 443) {
                $urlRequest = 'https://' . $this->clientPolicy->host . $urlRequest;
            } else {
                $urlRequest = 'https://' . $this->clientPolicy->host . ':' . $this->clientPolicy->httpsPort . $urlRequest;
            }
        } else {
            if ($this->clientPolicy->httpPort == 80) {
                $urlRequest = 'http://' . $this->clientPolicy->host . $urlRequest;
            } else {
                $urlRequest = 'http://' . $this->clientPolicy->host . ':' . $this->clientPolicy->httpPort . $urlRequest;
            }
        }

        $serializerTools = SerializerProvider::getSerializer($requestPolicy->requestProtocol);
        $requestData = $serializerTools->serialize($request->param);
        $requestData = array_merge($requestData, $request->addtionalParams);
        if ($requestPolicy->needAuthorization) {
            $requestData['access_token'] = $request->accessToken;
        }
        $requestData['_aop_datePattern'] = DateUtil::getDateFormatInServer();
        if ($requestPolicy->useSignature) {
            if ($this->clientPolicy->key != null && $this->clientPolicy->secret != null) {
                $pathToSign = $this->generateAPIPath($request, $requestPolicy, $this->clientPolicy);
                $signaturedStr = SignatureUtil::signature($pathToSign, $requestData, $requestPolicy, $this->clientPolicy);
                $requestData['_aop_signature'] = $signaturedStr;
            }
        }
        $ch = curl_init();
        $paramToSign = '';
        foreach ($requestData as $k => $v) {
            $paramToSign = $paramToSign . $k . '=' . urlencode((string) $v) . '&';
        }
        $paramLength = strlen($paramToSign);
        if ($paramLength > 0) {
            $paramToSign = substr($paramToSign, 0, $paramLength - 1);
        }
        if ($requestPolicy->httpMethod === 'GET') {
            $urlRequest = $urlRequest . '?' . $paramToSign;
            curl_setopt($ch, CURLOPT_URL, $urlRequest);
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);
            curl_setopt($ch, CURLOPT_POST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        // $result = $newclient->get ( $urlRequest, $requestData );
        } else {
            curl_setopt($ch, CURLOPT_URL, $urlRequest);
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $paramToSign);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            // $data = curl_exec ( $ch );
        }
        $data = curl_exec($ch);
        if ($data) {
            $content = $data;
            $deSerializerTools = SerializerProvider::getDeSerializer($requestPolicy->responseProtocol);
            $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            if ($status >= 400 && $status <= 599) {
                $resultException = $deSerializerTools->buildException($content, $resultClass);
                throw $resultException;
            }
            return $deSerializerTools->deSerialize($content, $resultClass);
        }
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $status;
    }

    private function generateRequestPath(APIRequest $request, RequestPolicy $requestPolicy, ClientPolicy $clientPolicy)
    {
        $urlResult = '';
        if ($requestPolicy->accessPrivateApi) {
            $urlResult = '/api';
        } else {
            $urlResult = '/openapi';
        }

        $defs = [
            $urlResult,
            '/',
            $requestPolicy->requestProtocol,
            '/',
            $request->id->version,
            '/',
            $request->id->namespace,
            '/',
            $request->id->name,
            '/',
            $clientPolicy->key,
        ];

        return implode($defs);
    }

    private function generateAPIPath(APIRequest $request, RequestPolicy $requestPolicy, ClientPolicy $clientPolicy)
    {
        $urlResult = '';
        $defs = [
            $urlResult,
            $requestPolicy->requestProtocol,
            '/',
            $request->id->version,
            '/',
            $request->id->namespace,
            '/',
            $request->id->name,
            '/',
            $clientPolicy->key,
        ];

        return implode($defs);
    }
}
