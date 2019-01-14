<?php

namespace GeoBas\Decorator;

use GeoBas\Contracts\CarService;

class OilChange implements CarService
{
	protected $carService;

	function __construct($carService)
	{
		$this->carService = $carService;
	}

	public function getCost()
	{
		return 10 + $this->carService->getCost();
	}

	public function getDescription()
	{
		return $this->carService->getDescription() . ', and oil change';
	}
}