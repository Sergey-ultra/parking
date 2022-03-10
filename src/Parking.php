<?php
declare(strict_types=1);

namespace App;

class Parking
{
    public function __construct(
        protected int $first,
        protected int $second,
        protected int $third
    ){}

    protected function validate(string $sequence):bool
    {
        return  preg_replace("#c|t#", '', $sequence) === '' ? true : false;
    }

    public function calculate(string $sequence): string
    {
        if ($this->validate($sequence)) {
            $res = '';

            $count = iconv_strlen($sequence);
            $rest = $this->third + $this->second;
            $first = $this->first;

            for ($i = 0; $i < $count; $i++) {
                $symbol = $sequence[$i];

                if ($symbol === 'c' && $rest > 0) {
                    $rest--;
                    $res .= 'y';
                } else if ($first > 0) {
                    $first--;
                    $res .= 'y';
                } else {
                    $res .= 'n';
                }

            }
            return $res;
        }

        return "Ошибка в переданной строке";

    }
}