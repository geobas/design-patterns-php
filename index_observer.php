<?php

require_once 'src/bootstrap.php';

use GeoBas\Observer\{Login, LogHandler, EmailNotifier};

$login = new Login;
$login->attach(new LogHandler)->attach(new EmailNotifier)->fire();