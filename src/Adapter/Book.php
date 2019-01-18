<?php

namespace GeoBas\Adapter;

use GeoBas\Contracts\BookInterface;

class Book implements BookInterface
{
	public function open()
	{
		return 'opening the paper book.';
	}

	public function turnPage()
	{
		return 'turning the page of the paper book.';
	}
}