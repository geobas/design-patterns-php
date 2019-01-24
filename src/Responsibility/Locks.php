<?php

namespace GeoBas\Responsibility;

use GeoBas\Responsibility\HomeChecker;

class Locks extends HomeChecker
{
	public function check(HomeStatus $home)
	{
		if ( !$home->locked )
		{
			throw new \Exception('The doors are not locked. Exit!');
		}

		$this->next($home);
	}
}