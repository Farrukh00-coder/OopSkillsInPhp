<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/oop/level3/task1/src/throwPillow/ThrowPillow.php';

use Src\ThrowPillow\Pillow as Pillow;
use Src\ThrowPillow\Window as Window;



$window = new Window();
for ($i = 0; $i < rand(20, 50); $i++) {
	$window->tryToHitMe(new Pillow());
}


echo 'Было брошено: '. Pillow::$count . ' подушек' . '<br>';
echo 'Попало в цель: ' . $window->pillowsCount . ' подушек';