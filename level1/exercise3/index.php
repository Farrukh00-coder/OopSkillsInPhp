<?php

class Car
{
	public string $name;
	public int $price;

	public function __construct(string $name, int $price)
	{
		$this->name = $name;
		$this->price = $price;
	}

	// выводим информацию о машине
	public function printCar()
	{
		echo $this->name . ' - ' . $this->price;
	}
}

class CarFactory
{
	// создаем машины
	public function createCar($name)
	{
		return new Car($name, rand(1000, 50000));
	}

}

// создаем фабрику машин
$factory = new CarFactory();
// список машин которые хотим создавать
$carsName = ['Mersedes', 'BMW', 'Lada', "Land Cruiser", 'Lamborgini', 'Agera', 'Pegout', 'Toyota', 'Bently'];

// массив объектов из машин
$car = [];
for ($i = 0; $i < rand(5, 20); $i++) {
	//создаем машину
	$car[$i] = $factory->createCar($carsName[array_rand($carsName)]);
	$car[$i]->printCar();
	echo "<br>";
}

echo 'Итого - ' . count($car);