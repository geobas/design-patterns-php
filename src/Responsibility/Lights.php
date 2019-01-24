<?php

namespace GeoBas\Responsibility;

use GeoBas\Responsibility\HomeChecker;

class Lights extends HomeChecker
{
	public function check(HomeStatus $home)
	{
		if ( !$home->lightsOff )
		{
			throw new \Exception('The lights are still on. Exit!');
		}

		$this->next($home);
	}
}