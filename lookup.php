<?php

require 'vendor/autoload.php';
require_once 'database.php';

use Doctrine\DBAL\DriverManager;

$conn = DriverManager::getConnection([
    'driver' => 'mysqli',
    'user' => 'root',
    'password' => 'PrAv#MU*YgKM33$C',
    'host' => '104.154.247.58',
    'dbname' => 'football'
]);

$record = [
    'HomeTeam' => 'Man United',
    'AwayTeam' => 'Leicester',
    'Date' => '10/08/2018'
];

$date = DateTime::createFromFormat('d/m/Y', $record['Date']);

$sql = "SELECT * FROM games WHERE gameDate = '{$date->format('Y-m-d')}' AND homeTeam = '{$record['HomeTeam']}' AND awayTeam = '{$record['AwayTeam']}'";
$stmt = $conn->query($sql);

$row = $stmt->fetch();

if (empty($row)) {
    echo 'empty';
}
