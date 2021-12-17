<?php

include "WeightCar.class.php";
include "RaceCar.class.php";
include "FamilyCar.class.php";

class Car
{
    private $title;
    private $price;
    private $description;
    private $type;

    public function __construct($title = 'empty', $description = 'empty', $price = 0)
    {
        $this->title = $title;
        $this->price = $price;
        $this->description = $description;
        $this->type = self::getType();
    }

    function info()
    {
        echo "Model: {$this->title}<br>Description: {$this->description}<br>Price: {$this->price}$<br>";
    }

    function getType()
    {
        return get_class($this);
    }
}
