<?php

abstract class Good
{
    use Traits;
    protected $title;
    protected $description;
    protected $weight;
    protected $count;

    public function __construct($title = "empty", $description = "empty", $weight = 1, int $count = 1)
    {
        $this->title = $title;
        $this->description = $description;
        $this->weight = $weight;
        $this->count = $count;
    }

    abstract function finalSum();

    function info()
    {
        echo "title: {$this->title} <br> description: {$this->description}";
    }
}
