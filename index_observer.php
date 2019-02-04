<?php

require_once 'src/bootstrap.php';

use GeoBas\Observer\{Login, LogHandler, EmailNotifier, LoginAlt, SMSNotifier, WebServiceNotifier};

$login = new Login;
$login->attach(new LogHandler)->attach(new EmailNotifier)->fire();

$loginAlt = new LoginAlt;
$loginAlt->attach([
	new SMSNotifier,
	new WebServiceNotifier
])->fire();