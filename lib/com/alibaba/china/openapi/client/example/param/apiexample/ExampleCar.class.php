<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
class ExampleCar extends SDKDomain
{
    private $builtDate;

    private $boughtDate;

    private $name;

    private $builtArea;

    private $carNumber;

    private $price;

    private $seats;

    private $stdResult;

    private $arrayResult;

    /**
     * @return
     */
    public function getBuiltDate()
    {
        return $this->builtDate;
    }

    /**
     * 设置.
     *
     * @param Date $builtDate
     *                        参数示例：<pre></pre>
     *                        此参数必填
     */
    public function setBuiltDate($builtDate)
    {
        $this->builtDate = $builtDate;
    }

    /**
     * @return
     */
    public function getBoughtDate()
    {
        return $this->boughtDate;
    }

    /**
     * 设置.
     *
     * @param Date $boughtDate
     *                         参数示例：<pre></pre>
     *                         此参数必填
     */
    public function setBoughtDate($boughtDate)
    {
        $this->boughtDate = $boughtDate;
    }

    /**
     * @return
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 设置.
     *
     * @param string $name
     *                     参数示例：<pre></pre>
     *                     此参数必填
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return
     */
    public function getBuiltArea()
    {
        return $this->builtArea;
    }

    /**
     * 设置.
     *
     * @param string $builtArea
     *                          参数示例：<pre></pre>
     *                          此参数必填
     */
    public function setBuiltArea($builtArea)
    {
        $this->builtArea = $builtArea;
    }

    /**
     * @return
     */
    public function getCarNumber()
    {
        return $this->carNumber;
    }

    /**
     * 设置.
     *
     * @param string $carNumber
     *                          参数示例：<pre></pre>
     *                          此参数必填
     */
    public function setCarNumber($carNumber)
    {
        $this->carNumber = $carNumber;
    }

    /**
     * @return
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * 设置.
     *
     * @param float $price
     *                     参数示例：<pre></pre>
     *                     此参数必填
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return
     */
    public function getSeats()
    {
        return $this->seats;
    }

    /**
     * 设置.
     *
     * @param int $seats
     *                   参数示例：<pre></pre>
     *                   此参数必填
     */
    public function setSeats($seats)
    {
        $this->seats = $seats;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('builtDate', $this->stdResult)) {
            $this->builtDate = $this->stdResult->{'builtDate'};
        }
        if (array_key_exists('boughtDate', $this->stdResult)) {
            $this->boughtDate = $this->stdResult->{'boughtDate'};
        }
        if (array_key_exists('name', $this->stdResult)) {
            $this->name = $this->stdResult->{'name'};
        }
        if (array_key_exists('builtArea', $this->stdResult)) {
            $this->builtArea = $this->stdResult->{'builtArea'};
        }
        if (array_key_exists('carNumber', $this->stdResult)) {
            $this->carNumber = $this->stdResult->{'carNumber'};
        }
        if (array_key_exists('price', $this->stdResult)) {
            $this->price = $this->stdResult->{'price'};
        }
        if (array_key_exists('seats', $this->stdResult)) {
            $this->seats = $this->stdResult->{'seats'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('builtDate', $this->arrayResult)) {
            $this->builtDate = $arrayResult['builtDate'];
        }
        if (array_key_exists('boughtDate', $this->arrayResult)) {
            $this->boughtDate = $arrayResult['boughtDate'];
        }
        if (array_key_exists('name', $this->arrayResult)) {
            $this->name = $arrayResult['name'];
        }
        if (array_key_exists('builtArea', $this->arrayResult)) {
            $this->builtArea = $arrayResult['builtArea'];
        }
        if (array_key_exists('carNumber', $this->arrayResult)) {
            $this->carNumber = $arrayResult['carNumber'];
        }
        if (array_key_exists('price', $this->arrayResult)) {
            $this->price = $arrayResult['price'];
        }
        if (array_key_exists('seats', $this->arrayResult)) {
            $this->seats = $arrayResult['seats'];
        }
    }
}
