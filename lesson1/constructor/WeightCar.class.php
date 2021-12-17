<?php
class WeightCar extends Car
{
    private $liftPower;

    public function __construct($title = 'empty', $price = 0, $description = 'empty', $liftPower = 0)
    {
        parent::__construct($title, $price, $description);
        $this->liftPower = $liftPower;
    }

    function info()
    {
        parent::info();
        echo "Carrying capacity of {$this->liftPower} kg";
    }
}
