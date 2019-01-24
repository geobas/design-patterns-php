<?php

namespace GeoBas\Strategy;

use GeoBas\Contracts\Logger;

class LogToWebService implements Logger
{
	public function log($data)
	{
		return 'Log the data to a Saas site';
	}
}