<?php

namespace Mop\DesignPatterns\Creational;

abstract class Creator
{
    /**
     * @return BankAccount
     */
    public function factoryMethod():BankAccount
   {
       return new StandardAccount();
   }
}
