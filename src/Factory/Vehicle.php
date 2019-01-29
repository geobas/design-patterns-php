<?php

namespace GeoBas\Factory;

abstract class Vehicle
{
    private $vehicleModel;
    private $vehicleYear;
    protected $vehicleType;

    public function __construct($model, $year)
    {
        $this->vehicleModel = $model;
        $this->vehicleYear = $year;
    }

    public function getModel()
    {
        return $this->vehicleModel;
    }

    public function getYear()
    {
        return $this->vehicleYear;
    }

    public function getModelYear()
    {
        return $this->vehicleModel . ' ' . $this->vehicleYear;
    }
}