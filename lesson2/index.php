<?php

spl_autoload_register(function ($class) {
    include "construct/" . $class . ".php";
});

$weightGoods = new WeightGoods("Детали двигателя", "Весовые", 2);
$weightGoods->info();

$digitGoods = new DigitGoods("Детали двигателя", "Цифровые", "", 4);
$digitGoods->info();

$pieceGoods = new PieceGoods("Двигатель", "Цельный двигатель", "", 2);
$pieceGoods->info();
