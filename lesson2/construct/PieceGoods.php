<?php
class PieceGoods extends Good
{
    protected $price = 100;
    protected $count;

    function finalSum()
    {
        return $this->price * $this->count;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }
    function info()
    {
        echo parent::info() . "<br>Количество: {$this->count}<br> Итоговый доход: " . self::finalSum() . "$";
    }
}
