<?php
declare(strict_types=1);

namespace App\Factory;

use App\DTO\CarDataRow;
use App\Model\CarType;
use App\Model\Truck;

class TruckFactory
{
    public static function create(CarDataRow $carDataRow): Truck
    {
        return (new Truck())
            ->setCarType(CarType::truck)
            ->setPhotoFileName($carDataRow->getPhotoFileName())
            ->setBrand($carDataRow->getBrand())
            ->setCarrying((float)$carDataRow->getCarrying())
            ->setBodyWidth((float)$carDataRow->getBodyWhl()?->getWidth())
            ->setBodyHeight((float)$carDataRow->getBodyWhl()?->getHeight())
            ->setBodyLength((float)$carDataRow->getBodyWhl()?->getLength());
    }
}
