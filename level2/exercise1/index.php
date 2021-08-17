<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/oop/level2/exercise1/src/restaurant/Restaurant.php';


$cook = new Src\Restaurant\Cook();
$cook->addDishToOrder(new Src\Restaurant\Cake());
$cook->addDishToOrder(new Src\Restaurant\Fish());
$cook->addDishToOrder(new Src\Restaurant\Soup());
$cook->addDishToOrder(new Src\Restaurant\Soup());
$cook->prepareFood();

echo "<br><br>";

$chef = new Src\Restaurant\Chef();
$chef->addDishToOrder(new Src\Restaurant\Cake());
$chef->addDishToOrder(new Src\Restaurant\Fish());
$chef->addDishToOrder(new Src\Restaurant\Soup());
$chef->addDishToOrder(new Src\Restaurant\Soup());
$chef->prepareFood();