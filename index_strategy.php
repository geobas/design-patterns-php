<?php

require 'vendor/autoload.php';

use GeoBas\Strategy\{App, LogToFile, LogToDatabase, LogToWebService};

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

echo (new App)->log(new LogToFile, 'some data');
echo '<p>';
echo (new App)->log(new LogToDatabase, 'some data');
echo '<p>';
echo (new App)->log(new LogToWebService, 'some data');