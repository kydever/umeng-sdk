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

class UMengUMiniGetRetentionByDataSourceIdListDTO extends APIParam
{
    /**
     * @var int 当前页
     */
    #[Param]
    public int $totalCount;

    /**
     * @var int 每页条数
     */
    #[Param]
    public int  $currentPage;

    /**
     * @var array 结果数据
     */
    #[Param]
    public array  $data;
}
