<?php


spl_autoload_register(function ($class) {

	// префикс пространства имен
	$prefix = 'Level5\\Task1\\Calculator';

	// Базовый каталог для префикса пространства имен
	$base_dir = __DIR__ . '/Calculator/';

	// использует ли класс префикс пространства имен?
	$len = strlen($prefix);
	if (strncmp($prefix, $class, $len) !== 0) {
		return;
	}

	// получаем относительное имя класса
	$relative_class = substr($class, $len);

	// создаем имя файла
	$file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';


	// если файл существет, подключаем его
	if (file_exists($file)) {
		require $file;
	}
});




function multiply($number1, $number2)
{
	return $number1 * $number2;
}


$subtraction = new Level5\Task1\Calculator\Subtraction();

$callbacks = [
	(function ($number1, $number2) {
		return $number1 + $number2;
	}),
	[$subtraction, 'subtraction'],
	'multiply',
	[Level5\Task1\Calculator\Division::class, 'division'],
];


$number1 = 5;
$number2 = 10;

echo 'Пара чисел: ' . $number1 . ' ' , $number2 . '<br>';
foreach ($callbacks as $callback) {
	Level5\Task1\Calculator\Calculator::calculate($number1, $number2, $callback);
}


$number1 = 10;
$number2 = 30;

echo 'Пара чисел: ' . $number1 . ' ' , $number2 . '<br>';
foreach ($callbacks as $callback) {
	Level5\Task1\Calculator\Calculator::calculate($number1, $number2, $callback);
}
