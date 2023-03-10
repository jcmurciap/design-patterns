<?php

namespace Mop\DesignPatterns\Creational;

class PersonalCreator extends Creator
{
    /**
     * @return BankAccount
     */
    public function factoryMethod(): BankAccount
    {
        return new PersonalAccount();
    }
}
