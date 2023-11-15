<?php
declare(strict_types=1);

namespace App\Factory;

use App\DTO\CarDataRow;
use App\Model\CarType;
use App\Model\SpecMachine;

class SpecMachineFactory
{
    public static function create(CarDataRow $carDataRow): SpecMachine
    {
        return (new SpecMachine())
            ->setCarType(CarType::specMachine)
            ->setPhotoFileName($carDataRow->getPhotoFileName())
            ->setBrand($carDataRow->getBrand())
            ->setCarrying((float)$carDataRow->getCarrying())
            ->setExtra($carDataRow->getExtra());
    }
}