<?php

namespace Mop\DesignPatterns\Creational;

class PersonalAccount extends BankAccount
{
    public string $type = 'Personal';


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
        if ($this->type = $type) {
            return 200;
        }
        return 404;
    }
}