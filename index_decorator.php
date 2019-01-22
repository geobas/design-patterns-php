<?php

require 'vendor/autoload.php';

use GeoBas\Decorator\{BasicInspection, OilChange, TireRotation};

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

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