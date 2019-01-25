<?php

require_once 'src/bootstrap.php';

use GeoBas\Singleton\DBConnection;

$instance = DBConnection::getInstance();
echo $instance->getConnection();
echo '<p>';
$instance = DBConnection::getInstance();
echo $instance->getConnection();
echo '<p>';
$instance = DBConnection::getInstance();
echo $instance->getConnection();