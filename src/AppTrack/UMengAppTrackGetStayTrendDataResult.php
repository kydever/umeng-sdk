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

class UMengAppTrackGetStayTrendDataResult extends APIParam
{
    /**
     * @var int 次日留存数据
     */
    #[Param]
    public int $stay1;

    /**
     * @var int 第3日留存数据
     */
    #[Param]
    public int $stay2;

    /**
     * @var int 第4日留存数据
     */
    #[Param]
    public int $stay3;

    /**
     * @var int 第5日留存数据
     */
    #[Param]
    public int $stay4;

    /**
     * @var int 第6日留存数据
     */
    #[Param]
    public int $stay5;

    /**
     * @var int 第7日留存数据
     */
    #[Param]
    public int $stay6;

    /**
     * @var int 第8日留存数据
     */
    #[Param]
    public int $stay7;

    /**
     * @var int 第9日留存数据
     */
    #[Param]
    public int $stay8;

    /**
     * @var int 第10日留存数据
     */
    #[Param]
    public int $stay9;

    /**
     * @var int 第11日留存数据
     */
    #[Param]
    public int $stay10;

    /**
     * @var int 第12日留存数据
     */
    #[Param]
    public int $stay11;

    /**
     * @var int 第13日留存数据
     */
    #[Param]
    public int $stay12;

    /**
     * @var int 第14日留存数据
     */
    #[Param]
    public int $stay13;

    /**
     * @var int 设置第15日留存数据
     */
    #[Param]
    public int $stay14;
}
