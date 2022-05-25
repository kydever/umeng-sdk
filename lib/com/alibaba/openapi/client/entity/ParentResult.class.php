<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
class ParentResult
{
    private $stdResult;

    private $responseStatus;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
    }

    public function getStdResult()
    {
        return $this->stdResult;
    }
}
