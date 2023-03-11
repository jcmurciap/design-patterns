<?php

namespace Mop\DesignPatterns\Creational;

$camiloCar = new Application(new BmwFactory());
$doorColor = $camiloCar->setColor('White');
$hp = $camiloCar->createMotor(500);
$chasis = $camiloCar->createChasis(123);
