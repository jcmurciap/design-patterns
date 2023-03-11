<?php

namespace Mop\DesignPatterns\Creational;

class BmwFactory implements CarFactory
{

    /**
     * @param int $serial
     * @return Chasis
     */
    public function createChasis(int $serial): Chasis
    {
        return new BmwChasis();
    }

    /**
     * @param int $horsepower
     * @return Motor
     */
    public function createMotor(int $horsepower): Motor
    {
        return new BmwMotor();
    }

    /**
     * @param string $color
     * @return Door
     */
    public function createDoor(string $color): Door
    {
        return new BmwDoor();
    }
}