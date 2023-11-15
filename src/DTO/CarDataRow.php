<?php
declare(strict_types=1);

namespace App\DTO;

readonly class CarDataRow
{
    public function __construct(
        private string $carType,
        private string $brand,
        private string $passengerSeatsCount,
        private string $photoFileName,
        private ?CarBodyWhl $bodyWhl,
        private string $carrying,
        private string $extra,
    )
    {
    }

    public function getCarType(): string
    {
        return $this->carType;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getPassengerSeatsCount(): string
    {
        return $this->passengerSeatsCount;
    }

    public function getPhotoFileName(): string
    {
        return $this->photoFileName;
    }

    public function getBodyWhl(): ?CarBodyWhl
    {
        return $this->bodyWhl;
    }

    public function getCarrying(): string
    {
        return $this->carrying;
    }

    public function getExtra(): string
    {
        return $this->extra;
    }
}
