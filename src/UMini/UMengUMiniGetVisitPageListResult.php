<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\APIParam;

class UMengUMiniGetVisitPageListResult extends APIParam
{
    /**
     * @var UMengUMiniVisitPageListDTO 数据详情
     */
    #[Param]
    public UMengUMiniVisitPageListDTO $data;

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
