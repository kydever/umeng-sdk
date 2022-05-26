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

class UMengUminiGetRetentionByDataSourceIdDTO extends APIParam
{
    /**
     * @var string 日期
     */
    #[Param]
    public string $dateTime;

    /**
     * @var int 新增/活跃用户数据
     */
    #[Param]
    public int $value;

    /**
     * @var string 次1日/周
     */
    #[Param]
    public string  $v1;

    /**
     * @var string 次2日/周
     */
    #[Param]
    public string  $v2;

    /**
     * @var string 次3日/周
     */
    #[Param]
    public string  $v3;

    /**
     * @var string 次4日/周
     */
    #[Param]
    public string  $v4;

    /**
     * @var string 次5日/周
     */
    #[Param]
    public string  $v5;

    /**
     * @var string 次6日/周
     */
    #[Param]
    public string  $v6;

    /**
     * @var string 次7日/周
     */
    #[Param]
    public string  $v7;

    /**
     * @var string 次14日/周
     */
    #[Param]
    public string  $v14;

    /**
     * @var string 次30日/周
     */
    #[Param]
    public string  $v30;
}
