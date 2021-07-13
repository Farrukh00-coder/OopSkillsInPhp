<?php

// abstract class SecretObject
// {
// 	// проверка достута
// 	abstract protected function agentLevelHasAccess(int $agentAccessLevel): bool;
// 	// получаем секретную информацию
// 	abstract protected function getSecretInformation(): string;
// 	// запрос секретной информации
// 	public function getSecretInformationForAgent(int $agentAccessLevel): string
// 	{
// 		if ($this->agentLevelHasAccess($agentAccessLevel)) {
// 			return $this->getSecretInformation();
// 		}
// 		return 'Доступ запрещен';
// 	}
// }

// abstract class Agent
// {
// 	abstract public function getAccessLevel(): int;
// 	public function getSecretInformation(SecretObject $secretObject): string
// 	{
// 		return $secretObject->getSecretInformationForAgent($this->getAccessLevel());
// 	}
// }


// // секретный объект
// class Library extends SecretObject
// {
// 	private string $secretInformation = 'Инопланетяне есть';

// 	protected function agentLevelHasAccess(int $agentLevelHasAccess): bool
// 	{
// 		if ($agentLevelHasAccess >= 1) {
// 			return true;
// 		}
// 		return false;
// 	}

// 	protected function getSecretInformation(): string
// 	{
// 		return $this->secretInformation;
// 	}

// }

// // секретный объект
// class Area51 extends SecretObject
// {
// 	private string $secretInformation = 'Инопланетян нет';

// 	protected function agentLevelHasAccess(int $agentLevelHasAccess): bool
// 	{
// 		if ($agentLevelHasAccess >= 6) {
// 			return true;
// 		}
// 		return false;
// 	}

// 	protected function getSecretInformation(): string
// 	{
// 		return $this->secretInformation;
// 	}
// }

// // агент
// class Student extends Agent
// {
// 	public function getAccessLevel(): int
// 	{
// 		return 1;
// 	}
// }

// // агент
// class SecretAgent extends Agent
// {
// 	public function getAccessLevel(): int
// 	{
// 		return 5;
// 	}
// }

// // агент
// class UnluckySpy extends Agent
// {
// 	public function getAccessLevel(): int
// 	{
// 		return rand(0, 6);
// 	}
// }

require_once $_SERVER['DOCUMENT_ROOT'] . '/oop/level2/exercise2/src/secretObject/AccessToSecretObject.php';



$student = new Src\SecretObject\Student();
$secretAgent = new Src\SecretObject\SecretAgent();
$unluckySpy = new Src\SecretObject\UnluckySpy();

echo $student->getSecretInformation(new Src\SecretObject\Library()) . '<br>';
echo $secretAgent->getSecretInformation(new Src\SecretObject\Library()) . '<br>';
echo $unluckySpy->getSecretInformation(new Src\SecretObject\Library()) . '<br>';

echo '<br>';

echo $student->getSecretInformation(new Src\SecretObject\Area51()) . '<br>';
echo $secretAgent->getSecretInformation(new Src\SecretObject\Area51()) . '<br>';
echo $unluckySpy->getSecretInformation(new Src\SecretObject\Area51()) . '<br>';