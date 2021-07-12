<?php

class PowerfulComputer
{
	public $memorySize;
	public $frequencyCpu;
	public $favoriteProgramm;

	public function __construct(float $memorySize, float $frequencyCpu, string $favoriteProgramm)
	{
		$this->memorySize = $memorySize;
		$this->frequencyCpu = $frequencyCpu;
		$this->favoriteProgramm = $favoriteProgramm;
	}

	public function executeProgram($program)
	{
		if ($this->favoriteProgramm == $program) {
			echo 'Устройство ' . $this->memorySize . 'Gb и ' . $this->frequencyCpu . 'GHz выполнил программу: ' .
				$program . ' и завис на долгое время...';	
		} else {
			echo 'Устройство ' . $this->memorySize . 'Gb и ' . $this->frequencyCpu . 'GHz выполнил программу: ' . $program;
		}
	}
}

$comp1 = new PowerfulComputer(512, 2.4, 'PhpShtorm');
$comp2 = new PowerfulComputer(800, 3.1, 'Microsoft World');

$comp1->executeProgram('Photoshop');
$comp1->executeProgram('Android Studio');
$comp1->executeProgram('PhpShtorm');
$comp1->executeProgram('Sublime text');
$comp1->executeProgram('Strike');

$comp2->executeProgram('PhpShtorm');
$comp2->executeProgram('Microsoft World');
$comp2->executeProgram('Strike');
$comp2->executeProgram('Assasin');
$comp2->executeProgram('Microsoft World');
