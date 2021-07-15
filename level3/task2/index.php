<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/oop/level3/task2/src/factory/Factory.php';

use Src\Factory\PencilFactory as PencilFactory;

$boxPencils = [];
$boxPencils[] = PencilFactory::createGreenOneHundredRublesPencil('мягкий');
$boxPencils[] = PencilFactory::createYellowPencil('твердый', 36);
$boxPencils[] = PencilFactory::createBlackSoftTenRublesPencil();
$boxPencils[] = PencilFactory::createRedFortyFiveRublesPencil('мягкий');
$boxPencils[] = PencilFactory::createBrownHardSeventyRublesPencil();
$boxPencils[] = PencilFactory::createBlueSeventyFiveRublesPencil('мягкий');


echo '<pre>';
var_dump($boxPencils);
echo '</pre>';