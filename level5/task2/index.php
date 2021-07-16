<?php


spl_autoload_register(function ($class) {

	// префикс пространства имен
	$prefix = 'Level5\\Task2\\Validation';

	// Базовый каталог для префикса пространства имен
	$base_dir = __DIR__ . '/Validation/';

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



$success = false;
if (! empty($_POST)) {
	try {
		$success = (new Level5\Task2\Validation\UserFormValidator())->validate($_POST);
	} catch (Exception $e) {
		$error = $e->getMessage();
	}
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Валидация</title>
</head>
<body>
	<?php if (isset($error)) {?>
		<p style="color: red">Ошибка: <?=$error?></p>
	<?php }?>
	<form action='/oop/level5/task2/' method="POST">
		<label>Имя:</label>
		<input type="text" name="name"><br><br>
		<label>Возраст:</label>
		<input type="text" name="age"><br><br>
		<label>Email:</label>
		<input type="email" name="email"><br><br>

		<input type="submit" value="Отправить">
	</form>
</body>
</html>