<?php

require_once 'src/bootstrap.php';

use GeoBas\Factory\VehicleFactory;

echo VehicleFactory::build('Ford', 'Focus', 2004)->getModelYear();
echo '<p>';
echo VehicleFactory::build('Yamaha', 'Crypton', 2015)->getModelYear();