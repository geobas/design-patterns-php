<?php

require_once 'src/bootstrap.php';

use GeoBas\Specification\{Customer, CustomerIsGold};

$specification = new CustomerIsGold;

$goldCustomer = new Customer('gold');
$silverCustomer = new Customer('silver');

echo $specification->isSatisfiedBy($goldCustomer) ? 'true' : 'false';
echo '<p>';
echo $specification->isSatisfiedBy($silverCustomer) ? 'true' : 'false';