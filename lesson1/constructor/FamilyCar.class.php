<?php
class FamilyCar extends Car
{
    private $trunkCapacity;

    public function __construct($title = 'empty', $price = 0, $description = 'empty', $trunkCapacity = 0)
    {
        parent::__construct($title, $price, $description);
        $this->trunkCapacity = $trunkCapacity;
    }

    function info()
    {
        parent::info();
        echo "Maximum trunk speed of {$this->trunkCapacity} kg";
    }
}
