<?php

require 'vendor/autoload.php';

use GeoBas\Adapter\{Book, Person, Kindle, eReaderAdapter, Nook};

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

echo (new Person)->read(new Book);
echo '<p>';
echo (new Person)->read(new eReaderAdapter(new Kindle));
echo '<p>';
echo (new Person)->read(new eReaderAdapter(new Nook));