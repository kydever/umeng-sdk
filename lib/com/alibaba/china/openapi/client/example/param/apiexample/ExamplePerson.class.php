<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
include_once 'com/alibaba/openapi/client/entity/SDKDomain.class.php';
include_once 'com/alibaba/openapi/client/entity/ByteArray.class.php';
class ExamplePerson extends SDKDomain
{
    private $name;

    private $age;

    private $birthday;

    private $mobileNumber;

    private $stdResult;

    private $arrayResult;

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
    public function getAge()
    {
        return $this->age;
    }

    /**
     * 设置.
     *
     * @param int $age
     *                 参数示例：<pre></pre>
     *                 此参数必填
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * 设置.
     *
     * @param Date $birthday
     *                       参数示例：<pre></pre>
     *                       此参数必填
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * 设置.
     *
     * @param string $mobileNumber
     *                             参数示例：<pre></pre>
     *                             此参数必填
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;
    }

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists('name', $this->stdResult)) {
            $this->name = $this->stdResult->{'name'};
        }
        if (array_key_exists('age', $this->stdResult)) {
            $this->age = $this->stdResult->{'age'};
        }
        if (array_key_exists('birthday', $this->stdResult)) {
            $this->birthday = $this->stdResult->{'birthday'};
        }
        if (array_key_exists('mobileNumber', $this->stdResult)) {
            $this->mobileNumber = $this->stdResult->{'mobileNumber'};
        }
    }

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists('name', $this->arrayResult)) {
            $this->name = $arrayResult['name'];
        }
        if (array_key_exists('age', $this->arrayResult)) {
            $this->age = $arrayResult['age'];
        }
        if (array_key_exists('birthday', $this->arrayResult)) {
            $this->birthday = $arrayResult['birthday'];
        }
        if (array_key_exists('mobileNumber', $this->arrayResult)) {
            $this->mobileNumber = $arrayResult['mobileNumber'];
        }
    }
}
