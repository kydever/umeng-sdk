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

class ResponseStatus extends APIParam
{
    #[Param]
    public int $code;

    #[Param]
    public string $message;
}
