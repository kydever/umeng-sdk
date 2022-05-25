<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\Client\Entity;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\APIParam;

class ResponseWrapper extends APIParam
{
    #[Param]
    public int $responseStatus;

    #[Param]
    public int $invokeStartTime;

    #[Param]
    public int $invokeCostTime;

    #[Param]
    public array $result;
}
