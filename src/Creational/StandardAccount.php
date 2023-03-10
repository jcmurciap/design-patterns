<?php

namespace Mop\DesignPatterns\Creational;

class StandardAccount extends BankAccount
{
    /**
     * @param $type
     * @return int
     */
    public function concreteProduct($type)
    {
        return 200;
    }
}
