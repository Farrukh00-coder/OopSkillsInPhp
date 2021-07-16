<?php

namespace Level5\Task3\Validation;

class UserFormValidator
{
	public function validate($data)
	{	
		if (empty($data['name'])) {
			throw new \Exception('Введите имя');
		}

		if ($data['age'] < 18) {
			throw new \Exception('Возраст строго выше 18 лет');
		}

		if (empty($data['email']) && !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
			throw new \Exception('Введите email');
		}
	}
}