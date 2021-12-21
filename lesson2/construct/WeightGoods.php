<?php

class WeightGoods extends Good
{
    use Traits;
    protected $price;
    protected $weight = 1;

    public function __construct($title = 'empty', $description = 'empty', $weight = 1, $count = 1)
    {
        parent::__construct($title, $description, $weight, $count);
        self::setPrice();
    }

    function finalSum()
    {
        return $this->price * $this->weight;
    }

    public function setPrice(): void
    {
        $new = new PieceGoods();
        $this->price = $new->getPrice();
    }

    function info()
    {
        echo parent::info() . "<br>Вес: {$this->weight} кг <br> Итговый доход: " . self::finalSum() . "$" . "<hr>";
    }
}
