<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\APIParam;

class UMengUMiniGetAppListParam extends APIParam
{
    /**
     * @var int 页码
     */
    public int $pageIndex = 1;

    /**
     * @var int 每页记录数
     */
    public int $pageSize = 30;
}
