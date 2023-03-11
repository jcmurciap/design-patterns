<?php

namespace Mop\DesignPatterns\Creational;

interface CarFactory
{
    public function createChasis(int $serial): Chasis;
    public function createMotor(int $horsepower): Motor;
    public function createDoor(string $color): Door;
}