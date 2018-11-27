<?php

require 'vendor/autoload.php';

use League\Csv\Reader;

$options = getopt("f:");

if ($options['f'] === null) {
    throw new UnexpectedValueException('Please provide a file path');
}

$csv = Reader::createFromPath('../tmp/footballdata.csv', 'r');

$csv->setHeaderOffset(0);

$header = $csv->getHeader(); //returns the CSV header record
$records = $csv->getRecords(); //returns all the CSV records as an Iterator object

echo $csv->getContent(); //returns the CSV document as a string


