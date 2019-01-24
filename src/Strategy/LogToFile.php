<?php

namespace GeoBas\Strategy;

use GeoBas\Contracts\Logger;

class LogToFile implements Logger
{
	public function log($data)
	{
		return 'Log the data to a file';
	}
}