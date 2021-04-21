<?php

require_once './vendor/autoload.php';

use Chronica\Model\Database\ChronicaPDO;

var_dump((new ChronicaPDO)->get());