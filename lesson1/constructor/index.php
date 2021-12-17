<?php
include "Car.class.php";

$arr = [
    new WeightCar("CAT", "Caterpillar truck", 5000000, 100000),
    new WeightCar("KAMAZ", "With Russia with love", 2000000, 150000),
    new RaceCar('Formula E', 'Faster elctric', '1000000', '280'),
    new RaceCar("Toyota TS050 Hybrid", "Faster then you", 1200000, 300),
    new FamilyCar("Nissan X-Trail", "For big family", 1200000, 150),
    new FamilyCar("Nissan Soul", "For big family and narrow street", 1200000, 150)
];

foreach ($arr as $good) {
    switch ($good->getType()) {
        case 'WeightCar':
            $sortArr['WeightCar'][] = $good;
            break;
        case 'RaceCar':
            $sortArr['RaceCar'][] = $good;
            break;
        case 'FamilyCar':
            $sortArr['FamilyCar'][] = $good;
            break;
    }
}

foreach ($sortArr as $type) {
    echo get_class($type[0]) . "<hr>";
    foreach ($type as $good) {
        $good->info();
        echo '<hr>';
    }
}
