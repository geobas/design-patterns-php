<?php

namespace GeoBas\Adapter;

use GeoBas\Contracts\BookInterface;
use Geobas\Contracts\eReaderInterface;

class eReaderAdapter implements BookInterface
{
	private $reader;

	public function __construct(eReaderInterface $reader)
	{
		$this->reader = $reader;
	}

	public function open()
	{
		return $this->reader->turnOn();
	}

	public function turnPage()
	{
		return $this->reader->pressNextButton();
	}
}