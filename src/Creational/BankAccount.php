<?php

namespace Mop\DesignPatterns\Creational;

abstract class BankAccount
{
    /**
     * @param $type
     * @return mixed
     */
    abstract public function concreteProduct($type);
}
