<?php

namespace GeoBas\Strategy;

use GeoBas\Contracts\Logger;

class LogToDatabase implements Logger
{
	public function log($data)
	{
		return 'Log the data to the database';
	}
}