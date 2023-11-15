<?php
declare(strict_types=1);

namespace App\Model;

class BaseCar
{
    private CarType $carType;
    private string $photoFileName;
    private string $brand;
    private float $carrying;

    public function getPhotoFileExt(): string
    {
        return pathinfo($this->photoFileName, PATHINFO_EXTENSION);
    }
    
    public function getCarType(): CarType
    {
        return $this->carType;
    }

    public function setCarType(CarType $carType): static
    {
        $this->carType = $carType;
        return $this;
    }

    public function getPhotoFileName(): string
    {
        return $this->photoFileName;
    }

    public function setPhotoFileName(string $photoFileName): static
    {
        $this->photoFileName = $photoFileName;
        return $this;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): static
    {
        $this->brand = $brand;
        return $this;
    }

    public function getCarrying(): float
    {
        return $this->carrying;
    }

    public function setCarrying(float $carrying): static
    {
        $this->carrying = $carrying;
        return $this;
    }
}
