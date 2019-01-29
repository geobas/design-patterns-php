<?php

namespace GeoBas\Factory;

class VehicleFactory
{
    public static function build($type, $model, $year)
    {
    	try {
	        if ( class_exists(__NAMESPACE__ .  '\\' . $type) ) {
	        	$vehicle = __NAMESPACE__ .  '\\' . $type;
		        return new $vehicle($model, $year);
	        }
	        throw new \Exception("Vehicle {$type} not found.");
    	} catch (\Throwable $t) {
    		die($t->getMessage());
    	}
    }
}