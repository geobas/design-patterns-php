<?php

namespace GeoBas\Singleton;

class DBConnection
{
	private $connection;

	private static $instance = null;

	private function __construct()
	{
		$this->connection = 'Connection to database.';
	}

	public static function getInstance()
	{
		if ( !self::$instance ) {
			self::$instance = new self;
			echo '(New) ';
		} else {
			echo '(Same) ';
		}

		return self::$instance;
	}

	public function getConnection()
	{
		return $this->connection;
	}
}