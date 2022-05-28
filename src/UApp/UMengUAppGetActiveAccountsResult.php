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

class UMengUAppGetActiveAccountsResult extends APIParam
{
    /**
     * @var UMengUAppActiveAccountInfo[]
     */
    #[Param]
    public array $activeAccountInfo;
}
