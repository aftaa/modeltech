<?php
declare(strict_types=1);

namespace App\Model;

class Car extends BaseCar
{
    private int $passengerSeatsCount;

    public function getPassengerSeatsCount(): int
    {
        return $this->passengerSeatsCount;
    }

    public function setPassengerSeatsCount(int $passengerSeatsCount): static
    {
        $this->passengerSeatsCount = $passengerSeatsCount;
        return $this;
    }
}
