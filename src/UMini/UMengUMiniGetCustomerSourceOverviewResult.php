<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\Annotation\ParamArray;
use KY\UMeng\Client\APIParam;

class UMengUMiniGetCustomerSourceOverviewResult extends APIParam
{
    /**
     * @var UMengUMiniCustomerSourceDTO[]
     */
    #[ParamArray(class: UMengUMiniCustomerSourceDTO::class)]
    public array $data = [];

    /**
     * @var string
     */
    #[Param]
    public string $msg;

    /**
     * @var int
     */
    #[Param]
    public int $code;

    /**
     * @var bool
     */
    #[Param]
    public bool $success;
}
