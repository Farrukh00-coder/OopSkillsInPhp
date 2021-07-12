<?php

class Fork
{
	public int $numberOfTeeth;

	public function __construct(int $numberOfTeeth)
	{
		$this->numberOfTeeth = $numberOfTeeth;
	}
}

class Cup
{
	public int $volume;

	public function __construct(int $volume)
	{
		$this->volume = $volume;
	}
}

class Table
{
	public string $color;

	public function __construct(string $color)
	{
		$this->color = $color;
	}
}



$cup1 = new Cup(200);
$cup2 = new Cup(300);
$cup3 = new Cup(400);

$table = new Table("Красный");

$fork1 = new Fork(3);
$fork2 = new Fork(4);