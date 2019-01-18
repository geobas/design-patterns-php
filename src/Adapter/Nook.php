<?php

namespace GeoBas\Adapter;

use GeoBas\Contracts\eReaderInterface;

class Nook implements eReaderInterface
{
	public function turnOn()
	{
		return 'turn the Nook on.';
	}

	public function pressNextButton()
	{
		return 'press the next button on the Nook.';
	}
}