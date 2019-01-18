<?php

namespace GeoBas\Adapter;

use GeoBas\Contracts\eReaderInterface;

class Kindle implements eReaderInterface
{
	public function turnOn()
	{
		return 'turn the Kindle on.';
	}

	public function pressNextButton()
	{
		return 'press the next button on the Kindle.';
	}
}