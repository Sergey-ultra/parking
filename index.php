<?php

use App\Parking;

require_once __DIR__ . '/vendor/autoload.php';

$parking = new Parking(8, 4, 5);

echo $parking->calculate('cctcctcccttctctcccct');
