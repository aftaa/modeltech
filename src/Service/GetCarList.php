<?php
declare(strict_types=1);

namespace App\Service;

use App\Factory\CarFactory;
use App\Factory\SpecMachineFactory;
use App\Factory\TruckFactory;
use App\Model\BaseCar;
use App\Model\Car;
use App\Model\CarType;
use App\Model\SpecMachine;
use App\Model\Truck;
use App\Parser\CarCsvParser;

class GetCarList
{
    /**
     * @return BaseCar[]
     */
    public function __invoke(string $filename): array
    {
        $parser = new CarCsvParser('data.csv');
        $carDataRows = $parser->parse();

        $objects = [];

        foreach ($carDataRows as $carDataRow) {
            switch ($carDataRow->getCarType()) {
                case CarType::car->value:
                    $objects[] = CarFactory::create($carDataRow);
                    break;
                case CarType::truck->value:
                    $objects[] = TruckFactory::create($carDataRow);
                    break;
                case CarType::specMachine->value:
                    $objects[] = SpecMachineFactory::create($carDataRow);
                    break;
            }
        }

        return $objects;
    }
}