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

class UMengUAppCountData extends APIParam
{
    /**
     * @var string 统计日期
     */
    #[Param]
    public string $date;

    /**
     * @var UMengUAppCountDataNameValue[]
     */
    #[Param]
    public array $dailyValue;

    /**
     * @var array 按小时查询返回数组
     */
    #[Param]
    public array $hourValue;

    /**
     * @var int 其它情况返回整型，按天无版本无渠道，按周，按月查询
     */
    #[Param]
    public int $value;
}
