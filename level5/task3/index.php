<?php


spl_autoload_register(function ($class) {

	// префикс пространства имен
	$prefix = 'Level5\\Task3\\Validation';

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
		$user = new Level5\Task3\Validation\User();
		$user->load($_POST['id']);
		$success = (new Level5\Task3\Validation\UserFormValidator())->validate($_POST);
		$user->save($_POST);
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
	<p style="color: red"><?=($success !== null && isset($error)) ? $error : ''?></p>
	<form action='/oop/level5/task3/' method="POST">
		<label>ID:</label>
		<input type="text" name="id"><br><br>
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