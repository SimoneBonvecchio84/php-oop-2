<?php
require_once __DIR__ . "/models/products.php";
require_once __DIR__ . "/models/toys.php";
require_once __DIR__ . "/models/food.php";

// Giocattoli per gatti

$giocattolo1 = new Toys ("Topo Topone", 2.99, "https://media.zooplus.com/bilder/7/400/67334_katzenspielzeug_wild_mouse_mit_sound_und_led_fg_2717_7.jpg","Gatto", "S", 3 , "Topo giocattolo per gatti");

$cibo1 = new Food ("Monge Gatto", 42.89,"https://m.media-amazon.com/images/I/61orBcPXu8L._AC_SL1500_.jpg","Gatto", 4.8, "Adulto", "Pollo" );

var_dump($giocattolo1);
var_dump($cibo1);


