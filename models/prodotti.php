<?php
require_once __DIR__ . "/cani.php";
require_once __DIR__ . "/gatti.php";


class Prodotti {
    private string $name;
    private float $price;    

    public function __construct(string $_name, float $_price)
    {
        $this->name  = $_name;
        $this->price = $_price;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }
}