<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
class SignatureUtil
{
    /**
     * @param unknown $path
     * @return string
     */
    public static function signature($path, array $parameters, RequestPolicy $requestPolicy, ClientPolicy $clientPolicy)
    {
        $paramsToSign = [];
        foreach ($parameters as $k => $v) {
            $paramToSign = $k . $v;
            array_push($paramsToSign, $paramToSign);
        }
        sort($paramsToSign);
        $implodeParams = implode($paramsToSign);
        $pathAndParams = $path . $implodeParams;
        $sign = hash_hmac('sha1', $pathAndParams, $clientPolicy->secKey, true);
        $signHexWithLowcase = bin2hex($sign);
        return strtoupper($signHexWithLowcase);
    }
}
