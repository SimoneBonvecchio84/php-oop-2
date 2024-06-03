<?php
require_once __DIR__ . "/models/products.php";
require_once __DIR__ . "/models/toys.php";
require_once __DIR__ . "/models/food.php";

// Giocattoli per gatti


$prodotto1 = new Toys ("Topo Topone", 2.99, "https://media.zooplus.com/bilder/7/400/67334_katzenspielzeug_wild_mouse_mit_sound_und_led_fg_2717_7.jpg","Gatto", "S", 3 , "Topo giocattolo per gatti");


var_dump($prodotto1);


