<?php

namespace GeoBas\Decorator;

use GeoBas\Contracts\CarService;

class BasicInspection implements CarService
{
	public function getCost()
	{
		return 5;
	}

	public function getDescription()
	{
		return 'Basic Inspection';
	}
}