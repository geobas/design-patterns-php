<?php

namespace GeoBas\Decorator;

use GeoBas\Contracts\CarService;

class OilChange implements CarService
{
	protected $carService;

	private $number = 10;

	private $description = ', and oil change';

	function __construct($carService = null)
	{
		if ( !empty($carService) ) $this->carService = $carService;
	}

	public function getCost()
	{
		return !empty($this->carService) ? $this->carService->getCost() + $this->number : $this->number;
	}

	public function getDescription()
	{
		return !empty($this->carService) ? $this->carService->getDescription() . $this->description : $this->description;
	}
}