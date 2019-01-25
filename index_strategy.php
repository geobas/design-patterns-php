<?php

require_once 'src/bootstrap.php';

use GeoBas\Strategy\{App, LogToFile, LogToDatabase, LogToWebService};

echo (new App)->log(new LogToFile, 'some data');
echo '<p>';
echo (new App)->log(new LogToDatabase, 'some data');
echo '<p>';
echo (new App)->log(new LogToWebService, 'some data');