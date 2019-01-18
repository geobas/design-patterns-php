<?php

require 'vendor/autoload.php';

use GeoBas\Adapter\{Book, Person, Kindle, eReaderAdapter, Nook};

echo (new Person)->read(new Book);
echo '<p>';
echo (new Person)->read(new eReaderAdapter(new Kindle));
echo '<p>';
echo (new Person)->read(new eReaderAdapter(new Nook));