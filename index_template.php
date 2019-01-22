<?php

require 'vendor/autoload.php';

use GeoBas\Template\{TurkeySub, VeggieSub};

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

echo (new TurkeySub)->make();
echo '<p>';
echo (new VeggieSub)->make();