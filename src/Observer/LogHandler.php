<?php

namespace GeoBas\Observer;

use GeoBas\Contracts\Observer;

class LogHandler implements Observer
{
	public function handle()
	{
		return 'Log something.';
	}
}