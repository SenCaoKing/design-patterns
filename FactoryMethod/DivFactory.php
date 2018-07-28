<?php

namespace Senking\DesignPatterns\FactoryMethod;

/**
 * 除法工厂
 *
 * Class DivFactory
 * @package Senking\DesignPatterns\FactoryMethod
 */
class DivFactory extends Factory
{
    /**
     * 创建除法产品类
     *
     * @return Div
     */
    public function create()
    {
        return new Div();
    }
}