<?php

namespace Mop\DesignPatterns\Creational;

class Application
{
    // Code that initialize or choose what kind of concrete factorie to use

    public $carFactory;

    /**
     * @param CarFactory $carFactory
     */
    public function __construct(CarFactory $carFactory)
    {
        $this->carFactory = $carFactory;
    }

    /**
     * @param $color
     * @return Door
     */
    public function setColor($color)
    {
        // You can add business rules...
        return $this->carFactory->createDoor($color);
    }

    /**
     * @param $hp
     * @return Motor
     */
    public function createMotor($hp)
    {
        // You can add business rules...
        return $this->carFactory->createMotor($hp);
    }

    /**
     * @param $serial
     * @return Chasis
     */
    public function createChasis($serial)
    {
        // You can add business rules...
        return $this->carFactory->createChasis($serial);
    }

}