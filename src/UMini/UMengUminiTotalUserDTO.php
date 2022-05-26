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

class UMengUminiTotalUserDTO extends APIParam
{
    /**
     * @var string 时间
     */
    #[Param]
    public string $dateTime;

    /**
     * @var int 累计用户数
     */
    #[Param]
    public int $totalUser;
}
