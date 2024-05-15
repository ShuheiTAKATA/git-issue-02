<?php

class Class01
{
	private string $name;
	
	public function __construct(string $name)
	{
		$this->name = $name;
	}

	public function say(): void
	{
		echo 'Hello world!;
	}

	public function substract(int $x, int $y): int
	{
		return $x - $y;
	}

	public functin multiply(int $x, int $y): int
	{
		return $x * $y;
	}
}