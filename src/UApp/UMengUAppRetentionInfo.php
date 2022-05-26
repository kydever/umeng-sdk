<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UApp;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\APIParam;

class UMengUAppRetentionInfo extends APIParam
{
    /**
     * @var string 统计日期
     */
    #[Param]
    public string $date;

    /**
     * @var int 当日安装用户数
     */
    #[Param]
    public int $totalInstallUser;

    /**
     * @var array 相对之后几日的留存用户数，安装日期到今日之间7天（每天），14天后，30天后留存用户占比（不包含今日）
     */
    #[Param]
    public array $retentionRate;
}
