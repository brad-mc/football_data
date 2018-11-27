<?php

require   '../vendor/autoload.php';

use League\Csv\Reader;

$options = getopt("a:f:");

$csv = Reader::createFromPath('/path/to/your/csv/file.csv', 'r');



