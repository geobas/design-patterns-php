<?php

namespace GeoBas\Strategy;

use GeoBas\Contracts\Logger;

class App
{
	public function log(Logger $logger = null, $data)
	{
		// $logger = $logger ?: new LogToFile;
		$logger = $logger ?? new LogToFile;
		return $logger->log($data);
	}
}