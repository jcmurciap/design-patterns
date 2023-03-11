<?php

namespace Mop\DesignPatterns\Creational;

class MercedezFactory implements CarFactory
{

    /**
     * @param int $serial
     * @return Chasis
     */
    public function createChasis(int $serial): Chasis
    {
        return new MercedezChasis();
    }

    /**
     * @param int $horsepower
     * @return Motor
     */
    public function createMotor(int $horsepower): Motor
    {
        return new MercedezMotor();
    }

    /**
     * @param string $color
     * @return Door
     */
    public function createDoor(string $color): Door
    {
        return new MercedezDoor();
    }
}