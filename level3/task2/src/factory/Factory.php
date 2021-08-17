<?php


namespace Src\Factory;

class Pencil
{
	public string $color;
	public string $softness;
	public int $price;

	public function __construct(string $color, string $softness, int $price)
	{
		$this->color = $color;
		$this->softness = $softness;
		$this->price = $price;
	}
}


class PencilFactory
{
	public static function createGreenOneHundredRublesPencil($softness)
	{
		return new Pencil('green', $softness, 100);
	}


	public static function createYellowPencil($softness, $price)
	{
		return new Pencil('yellow', $softness, $price);
	}


	public static function createBlackSoftTenRublesPencil()
	{
		return new Pencil('black', 'мягкий', 10);
	}


	public static function createRedFortyFiveRublesPencil($softness)
	{
		return new Pencil('red', $softness, 45);
	}


	public static function createBrownHardSeventyRublesPencil()
	{
		return new Pencil('brown', 'жесткий', 70);
	}


	public static function createBlueSeventyFiveRublesPencil($softness)
	{
		return new Pencil('Blue', $softness, 75);
	}

}
