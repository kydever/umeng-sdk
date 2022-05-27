<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace HyperfTest\Cases;

use KY\UMeng\AppTrack\UMengAppTrackAppDownload;

/**
 * @internal
 * @coversNothing
 */
class ParamTest extends AbstractTestCase
{
    public function testMakeFromArray()
    {
        $param = UMengAppTrackAppDownload::makeFromArray([
            'unitId' => 1,
        ]);

        $this->assertSame(1, $param->unitId);
    }
}
