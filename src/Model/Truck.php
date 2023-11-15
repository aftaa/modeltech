<?php
declare(strict_types=1);

namespace App\Model;

final class Truck extends BaseCar
{
    private float $bodyLength;
    private float $bodyWidth;
    private float $bodyHeight;

    public function getBodyVolume(): float
    {
        return $this->bodyLength * $this->bodyWidth * $this->bodyHeight;
    }

    public function getBodyLength(): float
    {
        return $this->bodyLength;
    }

    public function setBodyLength(float $bodyLength): static
    {
        $this->bodyLength = $bodyLength;
        return $this;
    }

    public function getBodyWidth(): float
    {
        return $this->bodyWidth;
    }

    public function setBodyWidth(float $bodyWidth): static
    {
        $this->bodyWidth = $bodyWidth;
        return $this;
    }

    public function getBodyHeight(): float
    {
        return $this->bodyHeight;
    }

    public function setBodyHeight(float $bodyHeight): static
    {
        $this->bodyHeight = $bodyHeight;
        return $this;
    }

}
