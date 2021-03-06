<?php

require_once 'src/bootstrap.php';

use GeoBas\Decorator\{BasicInspection, OilChange, TireRotation};

echo (new TireRotation(
		new OilChange(
			new BasicInspection()
		)
	 ))->getCost();

echo '<br>';

echo (new TireRotation(
		new OilChange(
			new BasicInspection()
		)
	 ))->getDescription();