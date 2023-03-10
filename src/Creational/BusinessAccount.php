<?php

namespace Mop\DesignPatterns\Creational;

class BusinessAccount extends BankAccount
{
    public string $type = 'Business';

    /**
     * @param $type
     * @return int
     */
    public function concreteProduct($type)
    {
        return $this->validation($type);
    }

    /**
     * @param $type
     * @return int
     */
    public function validation($type)
    {
        if ($type = $this->type){
            return 200;
        }

        return 404;
    }
}