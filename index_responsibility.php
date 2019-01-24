<?php

require 'vendor/autoload.php';

use GeoBas\Responsibility\{Alarm, Lights, Locks, HomeStatus};

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$locks = new Locks;
$lights = new Lights;
$alarm = new Alarm;

$locks->succeedWith($lights);
$lights->succeedWith($alarm);

$locks->check(new HomeStatus);