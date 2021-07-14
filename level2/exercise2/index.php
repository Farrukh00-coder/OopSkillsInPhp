<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/oop/level2/exercise2/src/secretObject/AccessToSecretObject.php';


$student = new Src\SecretObject\Student();
$secretAgent = new Src\SecretObject\SecretAgent();
$unluckySpy = new Src\SecretObject\UnluckySpy();

echo $student->getSecretInformation(new Src\SecretObject\Library()) . '<br>';
echo $secretAgent->getSecretInformation(new Src\SecretObject\Library()) . '<br>';
echo $unluckySpy->getSecretInformation(new Src\SecretObject\Library()) . '<br>';

echo '<br>';

echo $student->getSecretInformation(new Src\SecretObject\Area51()) . '<br>';
echo $secretAgent->getSecretInformation(new Src\SecretObject\Area51()) . '<br>';

echo '<br>';
echo 'Попытки шпиона получить информацию из зоны 51:' . '<br>';
for ($i = 0; $i < 10; $i++) {
	echo $unluckySpy->getSecretInformation(new Src\SecretObject\Area51()) . '<br>';
}