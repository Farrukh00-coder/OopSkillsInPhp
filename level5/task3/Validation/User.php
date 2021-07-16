<?php

namespace Level5\Task3\Validation;

class User
{
	public function load($id)
	{
		if ($id < 1) {
			throw new \Exception('Не найден в базе данных');
		}
	}

	public function save($data)
	{
		return (bool)rand(0, 1);
	}
}