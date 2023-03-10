<?php

namespace Mop\DesignPatterns\Creational;

class BusinessCreator extends Creator
{
    /**
     * @return BankAccount
     */
    public function factoryMethod(): BankAccount
    {
        return new BusinessAccount();
    }
}
