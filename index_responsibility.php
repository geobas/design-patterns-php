<?php

require_once 'src/bootstrap.php';

use GeoBas\Responsibility\{Alarm, Lights, Locks, HomeStatus};

$locks = new Locks;
$lights = new Lights;
$alarm = new Alarm;

$locks->succeedWith($lights);
$lights->succeedWith($alarm);

$locks->check(new HomeStatus);