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

class UMengUMiniVisitPageListDTO extends APIParam
{
    /**
     * @var int 当前页码
     */
    #[Param]
    public int $currentPage;

    #[Param]
    public UMengUMiniVisitPageDTO $data;

    /**
     * @var int 总条数
     */
    #[Param]
    public int $totalCount;
}
