<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\AppTrack;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\APIParam;

class UMengAppTrackGetRegisterAnalysisDataResult extends APIParam
{
    /**
     * 注册事件列表.
     * @var UMengAppTrackGetRegisterAnalysis[]
     */
    #[Param]
    public array $data;

    /**
     * @var int 总数
     */
    #[Param]
    public int $total;
}
