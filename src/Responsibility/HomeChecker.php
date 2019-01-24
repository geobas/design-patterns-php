<?php

namespace GeoBas\Responsibility;

abstract class HomeChecker
{
	protected $successor;

	public abstract function check(HomeStatus $home);

	public function succeedWith(HomeChecker $successor)
	{
		$this->successor = $successor;
	}

	public function next(HomeStatus $home)
	{
		if ($this->successor)
		{
			$this->successor->check($home);
		}
	}
}