<?php

namespace GeoBas\Adapter;

use GeoBas\Contracts\BookInterface;

class Person
{
	public function read(BookInterface $book)
	{
		return $book->open() . '<br>' . $book->turnPage();
	}
}