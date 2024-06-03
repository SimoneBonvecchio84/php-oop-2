<?php
require_once __DIR__ . "/models/prodotti.php";
require_once __DIR__ . "/models/type.php";
require_once __DIR__ . "/models/cani.php";
require_once __DIR__ . "/models/gatti.php";

$prodotto1 = new Prodotti("crocchette", 9.99);
$prodotto1 = new Type("crocchette", 2.99, "Cani");

var_dump($prodotto1);


