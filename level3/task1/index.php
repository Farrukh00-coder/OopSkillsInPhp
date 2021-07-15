<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/oop/level3/task1/src/throwPillow/ThrowPillow.php';

use Src\ThrowPillow\Pillow as Pillow;
use Src\ThrowPillow\Window as Window;


$pillow1 = new Pillow();
$pillow2 = new Pillow();
$pillow3 = new Pillow();
$pillow4 = new Pillow();
$pillow5 = new Pillow();
$pillow6 = new Pillow();
$pillow7 = new Pillow();
$pillow8 = new Pillow();
$pillow9 = new Pillow();
$pillow10 = new Pillow();
$pillow11 = new Pillow();
$pillow12 = new Pillow();
$pillow13 = new Pillow();

$window = new Window();
$window->tryToHitMe($pillow1);
$window->tryToHitMe($pillow2);
$window->tryToHitMe($pillow3);
$window->tryToHitMe($pillow4);
$window->tryToHitMe($pillow5);
$window->tryToHitMe($pillow6);
$window->tryToHitMe($pillow7);
$window->tryToHitMe($pillow8);
$window->tryToHitMe($pillow9);
$window->tryToHitMe($pillow10);
$window->tryToHitMe($pillow11);
$window->tryToHitMe($pillow12);
$window->tryToHitMe($pillow13);


echo 'Было брошено: '. Pillow::$count . ' подушек' . '<br>';
echo 'Попало в цель: ' . $window->pillowsCount . ' подушек';