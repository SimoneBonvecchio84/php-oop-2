<?php
require_once __DIR__ . "/models/products.php";
require_once __DIR__ . "/models/toys.php";
require_once __DIR__ . "/models/food.php";

// Giocattoli per gatti

$giocattolo1 = new Toys ("Topo Topone", 2.99, "https://media.zooplus.com/bilder/7/400/67334_katzenspielzeug_wild_mouse_mit_sound_und_led_fg_2717_7.jpg","Gatto", "S", 3 , "Topo giocattolo per gatti");

// Cibo per gatti

$cibo1 = new Food ("Monge Gatto", 42.89,"https://m.media-amazon.com/images/I/61orBcPXu8L._AC_SL1500_.jpg","Gatto", 4.8, "Adulto", "Pollo" );

var_dump($giocattolo1);
var_dump($cibo1);


// Giocattoli per cani 

$giocattolo2 = new Toys("Osso Plasticone", 14.99, "https://m.media-amazon.com/images/I/41n6L9pi7kL.__AC_SX300_SY300_QL70_ML2_.jpg", "Cane", "M", 4, "Osso di gomma per cani");

var_dump($giocattolo2);

// Cibo per Cani

$cibo2 = new Food ("Dog Heroes", 44.99, "https://m.media-amazon.com/images/I/71762wszYoL._AC_SX679_.jpg", "Cane", 3.8 , "Per Tutte le fascie d'età", "Maiale + Pollo" );
