<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\Client;

use KY\UMeng\Client\Policy\ClientPolicy;

class SyncAPIClient
{
    public function __construct(public ClientPolicy $clientPolicy)
    {
    }

    public function send(APIRequest $request, $resultDefiniation, RequestPolicy $requestPolicy)
    {
        $urlRequest = $this->generateRequestPath($request, $requestPolicy, $this->clientPolicy);
        if ($requestPolicy->useHttps) {
            if ($this->clientPolicy->httpsPort == 443) {
                $urlRequest = 'https://' . $this->clientPolicy->serverHost . $urlRequest;
            } else {
                $urlRequest = 'https://' . $this->clientPolicy->serverHost . ':' . $this->clientPolicy->httpsPort . $urlRequest;
            }
        } else {
            if ($this->clientPolicy->httpPort == 80) {
                $urlRequest = 'http://' . $this->clientPolicy->serverHost . $urlRequest;
            } else {
                $urlRequest = 'http://' . $this->clientPolicy->serverHost . ':' . $this->clientPolicy->httpPort . $urlRequest;
            }
        }

        $serializerTools = SerializerProvider::getSerializer($requestPolicy->requestProtocol);
        $requestData = $serializerTools->serialize($request->requestEntity);
        $requestData = array_merge($requestData, $request->addtionalParams);
        if ($requestPolicy->needAuthorization) {
            $requestData['access_token'] = $request->accessToken;
        }
        if ($requestPolicy->requestSendTimestamp) {
            // $requestData ["_aop_timestamp"] = time();
        }
        $requestData['_aop_datePattern'] = DateUtil::getDateFormatInServer();
        if ($requestPolicy->useSignture) {
            if ($this->clientPolicy->appKey != null && $this->clientPolicy->secKey != null) {
                $pathToSign = $this->generateAPIPath($request, $requestPolicy, $this->clientPolicy);
                $signaturedStr = SignatureUtil::signature($pathToSign, $requestData, $requestPolicy, $this->clientPolicy);
                $requestData['_aop_signature'] = $signaturedStr;
            }
        }
        $ch = curl_init();
        $paramToSign = '';
        foreach ($requestData as $k => $v) {
            $paramToSign = $paramToSign . $k . '=' . urlencode($v) . '&';
        }
        $paramLength = strlen($paramToSign);
        if ($paramLength > 0) {
            $paramToSign = substr($paramToSign, 0, $paramToSign - 1);
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
                $resultException = $deSerializerTools->buildException($content, $resultDefiniation);
                throw $resultException;
            }
            return $deSerializerTools->deSerialize($content, $resultDefiniation);
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
            $request->apiId->version,
            '/',
            $request->apiId->namespace,
            '/',
            $request->apiId->name,
            '/',
            $clientPolicy->appKey,
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
            $request->apiId->version,
            '/',
            $request->apiId->namespace,
            '/',
            $request->apiId->name,
            '/',
            $clientPolicy->appKey,
        ];

        return implode($defs);
    }
}
