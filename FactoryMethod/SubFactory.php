<?php

namespace Senking\DesignPatterns\FactoryMethod;

/**
 * 减法工厂
 *
 * Class SubFactory
 * @package Senking\DesignPatterns\FactoryMethod
 */
class SubFactory extends Factory
{
    /**
     * 创建减法产品类
     *
     * @return Sub
     */
    public function create()
    {
        return new Sub();
    }
}