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

class UMengApptrackGetRegisterAnalysis extends APIParam
{
    /**
     * @var string 注册 ID
     */
    #[Param]
    public string $registerId;

    /**
     * @var string 注册日期
     */
    #[Param]
    public string $eventDs;

    /**
     * @var string 激活日期
     */
    #[Param]
    public string $activateDs;

    /**
     * @var string 点击日期
     */
    #[Param]
    public string $clickDs;
}
