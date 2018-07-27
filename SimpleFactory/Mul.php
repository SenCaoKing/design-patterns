<?php

namespace Senking\DesignPatterns\SimpleFactory;

/**
 * 乘法
 *
 * Class Mul
 * @package Senking\DesignPatterns\SimpleFactory
 */
class Mul extends Operation
{
    /**
     * 计算结果
     *
     * @return int|mixed
     */
    public function getResult()
    {
        return $this->numberA * $this->numberB;
    }
}