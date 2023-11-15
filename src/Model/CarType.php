<?php
declare(strict_types=1);

namespace App\Model;

enum CarType: string
{
    case car = 'car';
    case truck = 'truck';
    case specMachine = 'spec_machine';
}
