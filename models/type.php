<?php
require_once __DIR__ . "/prodotti.php";
require_once __DIR__ . "/cani.php";
require_once __DIR__ . "/gatti.php";


class Type extends Prodotti {
    private string $categoria;
    public function __construct(string $name, float $price, string $categoria)
    {
        parent::__construct($name, $price);
        $this-> categoria = $categoria;
        if(!in_array($categoria,["Cani", "Gatti"])){
            throw new Exception("Categoria non presente!");
        }
    }

    public function getCategoria() {
        return $this-> categoria;
    }
   
    
}

