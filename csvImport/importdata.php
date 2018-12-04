<?php

require   '../vendor/autoload.php';

use League\Csv\Reader;

$csv = Reader::createFromPath("../tmp/footballdata.csv", 'r');

echo $csv->getContent();

