<?php
declare(strict_types=1);

namespace App\Model;

use App\Model\BaseCar;

class SpecMachine extends BaseCar
{
    private string $extra;

    public function getExtra(): string
    {
        return $this->extra;
    }

    public function setExtra(string $extra): static
    {
        $this->extra = $extra;
        return $this;
    }

}
