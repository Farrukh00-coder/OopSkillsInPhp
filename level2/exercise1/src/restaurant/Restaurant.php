<?php

namespace Src\Restaurant;

abstract class Dish
{
	abstract public function getName(): string;
	abstract public function getPrice(): int;
}


class Fish extends Dish
{
	public function getName(): string
	{
		return 'Форель';
	}

	public function getPrice(): int
	{
		return 350;
	}
}


class Cake extends Dish
{
	public function getName(): string
	{
		return 'Торт-наполеон';
	}

	public function getPrice(): int
	{
		return 130;
	}
}

class Soup extends Dish
{
	public function getName(): string
	{
		return 'Суп-харчо';
	}

	public function getPrice(): int
	{
		return 130;
	}
}

class Cook
{
	// массив блюд
	private array $order = [];

	// добавляем новое блюдо в заказ
	public function addDishToOrder(Dish $dish)
	{
		$this->order[] = $dish;
	}

	// возвращаем итоговую стоимость блюд заказа
	protected function getOrderPrice()
	{
		$price = 0;
		foreach ($this->order as $value) {
			$price += $value->getPrice();
		}
		return $price;
	}

	public function prepareFood()
	{
		foreach ($this->order as $value) {
			echo 'Повар приготовил: ' . $value->getName() . '<br>';
		}
		echo 'Стоимость заказа: ' . $this->getOrderPrice();
	}

	// доступ к массиву блюд
	protected function getOrder()
	{
		return $this->order;
	}
}

class Chef extends Cook
{
	protected function getOrderPrice()
	{
		$price = 0;
		foreach (parent::getOrder() as $value) {
			$price += $value->getPrice() * 5;
		}
		return $price;
	}
}