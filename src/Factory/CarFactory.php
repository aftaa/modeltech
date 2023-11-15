<?php
declare(strict_types=1);

namespace App\Factory;

use App\DTO\CarDataRow;
use App\Model\Car;
use App\Model\CarType;

class CarFactory
{
    public static function create(CarDataRow $carDataRow): Car
    {
        return (new Car())
            ->setCarType(CarType::car)
            ->setPhotoFileName($carDataRow->getPhotoFileName())
            ->setBrand($carDataRow->getBrand())
            ->setCarrying((float)$carDataRow->getCarrying())
            ->setPassengerSeatsCount((int)$carDataRow->getPassengerSeatsCount());
    }
}
