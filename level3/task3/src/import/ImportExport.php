<?php


namespace Src\ImportExport;

interface Reader
{
	public function read(): array;
}

interface Writer
{
	public function write(array $data);
}

interface Converter
{
	public function convert(string $item): string;
}



class ArrayReader implements Reader
{
	public function read(): array
	{
		$data = ['Яблоко', 'Вишня', 'Банан', 'Машина', 'Кабриолет'];
		return $data;
	}
}

class ToSessionWriter implements Writer
{
	public function write(array $data)
	{
		$_SESSION['writer'] = $data;
	}
}

class StrUpConventer implements Converter
{
	public function convert(string $item): string
	{
		return mb_strtoupper($item);
	}
}

class DoubleStrConventer implements Converter
{
	public function convert(string $item): string
	{
		return $item . $item;
	}
}

class Import
{
	private Reader $reader;
	private Writer $writer;
	private array $converters = [];

	public function from(Reader $reader): Import
	{
		$this->reader = $reader;
		return $this;
	}

	public function to(Writer $writer): Import
	{
		$this->writer = $writer;
		return $this; 
	}

	public function with(Converter $converter): Import
	{
		$this->converters[] = new $converter;
		return $this;
	}

	public function execute()
	{
		$data = $this->reader->read();
		$result= [];
		foreach ($data as $item) {
			foreach ($this->converters as $converter) {
				$item = $converter->convert($item);
			}

			$result[] = $item;
		}

		$this->writer->write($result);
	}
}