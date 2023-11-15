<?php
declare(strict_types=1);

namespace App\DTO;

readonly class CarBodyWhl
{
    public function __construct(
        private string $width,
        private string $height,
        private string $length,
    )
    {
    }

    public function getWidth(): string
    {
        return $this->width;
    }

    public function getHeight(): string
    {
        return $this->height;
    }

    public function getLength(): string
    {
        return $this->length;
    }
}
