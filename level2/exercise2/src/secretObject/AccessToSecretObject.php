<?php

namespace Src\SecretObject;


abstract class SecretObject
{
	// проверка достута
	abstract protected function agentLevelHasAccess(int $agentAccessLevel): bool;
	// получаем секретную информацию
	abstract protected function getSecretInformation(): string;
	// запрос секретной информации
	public function getSecretInformationForAgent(int $agentAccessLevel): string
	{
		if ($this->agentLevelHasAccess($agentAccessLevel)) {
			return $this->getSecretInformation();
		}
		return 'Доступ запрещен';
	}
}

abstract class Agent
{
	abstract public function getAccessLevel(): int;
	public function getSecretInformation(SecretObject $secretObject): string
	{
		return $secretObject->getSecretInformationForAgent($this->getAccessLevel());
	}
}


// секретный объект
class Library extends SecretObject
{
	private string $secretInformation = 'Инопланетяне есть';

	protected function agentLevelHasAccess(int $agentLevelHasAccess): bool
	{
		if ($agentLevelHasAccess >= 1) {
			return true;
		}
		return false;
	}

	protected function getSecretInformation(): string
	{
		return $this->secretInformation;
	}

}

// секретный объект
class Area51 extends SecretObject
{
	private string $secretInformation = 'Инопланетян нет';

	protected function agentLevelHasAccess(int $agentLevelHasAccess): bool
	{
		if ($agentLevelHasAccess >= 6) {
			return true;
		}
		return false;
	}

	protected function getSecretInformation(): string
	{
		return $this->secretInformation;
	}
}

// агент
class Student extends Agent
{
	public function getAccessLevel(): int
	{
		return 1;
	}
}

// агент
class SecretAgent extends Agent
{
	public function getAccessLevel(): int
	{
		return 5;
	}
}

// агент
class UnluckySpy extends Agent
{
	public function getAccessLevel(): int
	{
		return rand(0, 6);
	}
}