<?php

namespace GeoBas\Decorator;

use GeoBas\Contracts\CarService;

class TireRotation implements CarService
{
	protected $carService;

	function __construct($carService)
	{
		$this->carService = $carService;
	}

	public function getCost()
	{
		return 15 + $this->carService->getCost();
	}

	public function getDescription()
	{
		return $this->carService->getDescription() . ', and a tire rotation';
	}
}