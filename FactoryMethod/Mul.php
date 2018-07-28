<?php

namespace Senking\DesignPatterns\FactoryMethod;

/**
 * 乘法
 *
 * Class Mul
 * @package Senking\DesignPatterns\FactoryMethod
 */
class Mul extends Operation
{
    /**
     * 计算结果
     *
     * @return int|float
     */
    public function getResult()
    {
        return $this->numberA * $this->numberB;
    }
}