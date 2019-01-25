<?php

require_once 'src/bootstrap.php';

use GeoBas\Template\{TurkeySub, VeggieSub};

echo (new TurkeySub)->make();
echo '<p>';
echo (new VeggieSub)->make();