<?php


namespace Src\ThrowPillow;

class Pillow
{
	public static int $count = 0;

	public function __construct()
	{
		self::$count++;
	}
	
}

class Window
{
	public $pillowsCount = 0;

	public function tryToHitMe(Pillow $pillow)
	{
		if (rand(0, 1)) {
			$this->pillowsCount++;
		}
	}
}