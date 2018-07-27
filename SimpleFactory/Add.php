<?php

namespace Senking\DesignPatterns\SimpleFactory;

/**
 * 加法
 *
 * Class Add
 * @package Senking\DesignPatterns\SimpleFactory
 */
class Add extends Operation
{
    /**
     * 计算结果
     *
     * @return int|mixed
     */
    public function getResult()
    {
        return $this->numberA + $this->numberB;
    }
}