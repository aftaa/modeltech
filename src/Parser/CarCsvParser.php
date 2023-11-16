<?php
declare(strict_types=1);

namespace App\Parser;

use App\DTO\CarBodyWhl;
use App\DTO\CarDataRow;
use Exception;

use function array_shift;
use function explode;
use function fclose;
use function file_exists;
use function fgets;
use function fopen;
use function preg_match;
use function strlen;


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
                $matches[4] = $this->parseWhl($matches[4]);
                $carsDataRows[] = new CarDataRow(...$matches);
            }
        }
        fclose($f);
        return $carsDataRows;
    }

    public function parseWhl(string $whl): ?CarBodyWhl
    {
        if (strlen($whl) > 0) {
            $parsed = explode('x', $whl);
            return new CarBodyWhl(...$parsed);
        }
        return null;
    }
}
