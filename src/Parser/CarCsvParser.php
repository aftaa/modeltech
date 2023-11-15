<?php
declare(strict_types=1);

namespace App\Parser;

use App\DTO\CarBodyWhl;
use App\DTO\CarDataRow;
use Exception;

class CarCsvParser
{
    const PCRE = '/(car|truck|spec_machine);([^;]+);(\d*);([^;]*);([x\d.]*);([\d.]*);([^;]*);/';

    /**
     * @throws Exception
     */
    public function __construct(private readonly string $filename)
    {
        if (!file_exists($this->filename)) {
            throw new Exception("File $this->filename doesn't exists");
        }
    }

    /**
     * @return CarDataRow[]
     */
    public function parse(): array
    {
        $carsDataRows = [];
        $f = fopen($this->filename, 'r');
        while (false !== ($s = fgets($f))) {
            if (preg_match(self::PCRE, $s, $matches)) {
                array_shift($matches);
                $matches[4] = strlen($matches[4]) > 0 ? new CarBodyWhl(...explode('x', $matches[4])) : null;
                $carsDataRows[] = new CarDataRow(...$matches);
            }
        }
        fclose($f);
        return $carsDataRows;
    }
}
