<?php

class Product
{
	public string $name;
	public int $price;

	public function __construct(string $name, int $price)
	{
		$this->name = $name;
		$this->price = $price;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getPrice()
	{
		return $this->price;
	}
}


class BasketPosition
{
	public Product $product;
	public int $quantity;

	public function __construct(Product $product, int $quantity)
	{
		$this->product = $product;
		$this->quantity = $quantity;
	}

	public function getProduct()
	{
		return $this->product;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}
}


class Basket
{
	public array $positions = [];
	// public int $sum = 0;

	// добавляет товар в корзину
	public function addProduct(Product $product, $quantity)
	{
		$this->positions[] = new BasketPosition($product, $quantity);
	}

	// возвращает стоимость товаров в корзине
	public function getPrice(): int
	{
		$sum = 0;
		foreach ($this->positions as $product) {
			$sum += $product->product->getPrice();
		}

		return $sum;
	}

	// выводит информацию о корзине
	public function describe()
	{
		foreach ($this->positions as $product) {
			echo $product->product->getName() . ' - ' . $product->product->getPrice() . ' - ' . $product->getQuantity() . ' ';
		}
	}
}


class Order
{
	private Basket $basket;

	public function __construct(Basket $basket)
	{
		$this->basket = $basket;
	}

	// возращает стоимость товаров заказа, которая складывается из цены корзины + 300 за доставку
	public function getPrice(): int
	{
		return $this->getBasket()->getPrice() + 300;
	}

	public function getBasket(): Basket
	{
		return $this->basket;
	}
}


$product1 = new Product('Масло', 150);
$product2 = new Product('Кувшин', 300);
$product3 = new Product('Велосипед', 1000);
$basket = new Basket();
$basket->addProduct($product1, 10);
$basket->addProduct($product2, 5);
$basket->addProduct($product3, 20);
$order = new Order($basket);

echo 'Создан заказ, на общую сумму: ' . $order->getPrice() . '. Состав заказа: ';
$order->getBasket()->describe();