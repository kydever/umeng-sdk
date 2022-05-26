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

class UMengUMiniGetAppListParam extends APIParam
{
    /**
     * @var array [
     *            'pageIndex'=>' int 页码',
     *            'pageSize'=>' int 每页记录数',
     *            ]
     */
    #[Param]
    public array $sdkStdResult;
}
