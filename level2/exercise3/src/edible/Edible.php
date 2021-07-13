<?php

namespace Src\Edible;


interface Edible
{
	public function edible(): bool;
	public function taste(): string;
}

class Banan implements Edible
{
	public function edible(): bool
	{
		return rand(0, 1);
	}

	public function taste(): string
	{
		return 'На вкус как банан';
	}
}


class Car implements Edible
{
	public function edible(): bool
	{
		return rand(0, 1);
	}

	public function taste(): string
	{
		return 'Машина';
	}
}


class Chicken implements Edible
{
	public function edible(): bool
	{
		return rand(0, 1);
	}

	public function taste(): string
	{
		return 'Курица';
	}
}

class Ball implements Edible
{
	public function edible(): bool
	{
		return rand(0, 1);
	}

	public function taste(): string
	{
		return 'Мяч';
	}
}

class Cherry implements Edible
{
	public function edible(): bool
	{
		return rand(0, 1);
	}

	public function taste(): string
	{
		return 'Вишня';
	}
}

class Omnivore
{
	public function eat(Edible $edible)
	{
		if ($edible->edible()) {
			echo 'Очень вкусно, я съел ' . $edible::class . '. На вкус ' . $edible->taste() . '<br>';
		} else {
			echo 'Даже я такое не ем: ' . $edible::class . '. Фу.' . '<br>';
		}
	}
}