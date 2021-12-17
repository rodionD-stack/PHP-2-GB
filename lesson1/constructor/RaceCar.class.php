<?php
class RaceCar extends Car
{
    private $maxSpeed;

    public function __construct($title = 'empty', $price = 0, $description = 'empty', $maxSpeed = 0)
    {
        parent::__construct($title, $price, $description);
        $this->maxSpeed = $maxSpeed;
    }

    function info()
    {
        parent::info();
        echo "Maximum developed speed of {$this->maxSpeed} km/h";
    }
}
