<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/oop/level2/exercise3/src/edible/Edible.php';



$banan = new Src\Edible\Banan();
$car = new Src\Edible\Car();
$chicken = new Src\Edible\Chicken();
$ball = new Src\Edible\Ball();
$cherry = new Src\Edible\Cherry();

$omnivore = new Src\Edible\Omnivore();
$omnivore->eat($banan);
$omnivore->eat($car);
$omnivore->eat($chicken);
$omnivore->eat($ball);
$omnivore->eat($cherry);