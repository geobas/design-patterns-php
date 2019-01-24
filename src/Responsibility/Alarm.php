<?php

namespace GeoBas\Responsibility;

use GeoBas\Responsibility\HomeChecker;

class Alarm extends HomeChecker
{
	public function check(HomeStatus $home)
	{
		if ( !$home->alarmOn )
		{
			throw new \Exception('The alarm has not been set. Exit!');
		}

		$this->next($home);
	}

}