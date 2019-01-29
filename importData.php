<?php

require 'vendor/autoload.php';
require_once 'database.php';

use League\Csv\Reader;
use Doctrine\DBAL\DriverManager;

$conn = DriverManager::getConnection([
    'driver' => 'mysqli',
    'user' => 'root',
    'password' => 'PrAv#MU*YgKM33$C',
    'host' => '104.154.247.58',
    'dbname' => 'football'
]);

$csvPaths = [
    'http://www.football-data.co.uk/mmz4281/1819/E0.csv',
    'http://www.football-data.co.uk/mmz4281/1819/E1.csv',
    'http://www.football-data.co.uk/mmz4281/1819/E2.csv',
    'http://www.football-data.co.uk/mmz4281/1819/E3.csv',
    'http://www.football-data.co.uk/mmz4281/1819/EC.csv'
];

foreach ($csvPaths as $csvPath) {
//load the CSV document from a file path
    $csv = Reader::createFromString(file_get_contents($csvPath));
    $csv->setHeaderOffset(0);

    foreach ($csv->getRecords() as $record) {
        if (!isNewRecord($record, $conn)) {
            echo 'Games Already In Database';
            continue;
        }

        $game = new Game();
        $game->setDivision($record['Div']);
        $game->setGameDate(DateTime::createFromFormat('d/m/Y', $record['Date']));
        $game->setHomeTeam($record['HomeTeam']);
        $game->setAwayTeam($record['AwayTeam']);
        $game->setFullTimeHomeGoals($record['FTHG']);
        $game->setFullTimeAwayGoals($record['FTAG']);
        $game->setFullTimeResult($record['FTR']);
        $game->setHalfTimeHomeGoals($record['HTHG']);
        $game->setHalfTimeAwayGoals($record['HTAG']);
        $game->setHalfTimeResult($record['HTR']);
        $game->setHomeShots($record['HS']);
        $game->setAwayShots($record['AS']);
        $game->setHomeShotsOnTarget($record['HST']);
        $game->setAwayShotsOnTarget($record['AST']);
        $game->setHomeFouls($record['HF']);
        $game->setAwayFouls($record['AF']);
        $game->setHomeCorners($record['HC']);
        $game->setAwayCorners($record['AC']);
        $game->setHomeYellows($record['HY']);
        $game->setAwayYellows($record['AY']);
        $game->setHomeReds($record['HR']);
        $game->setAwayReds($record['AR']);
        try {
            $entityManager->persist($game);
            $entityManager->flush();
            // echo "Created Game with ID  {$game->getId()}\n";
        } catch (Exception $exception) {
            error_log($exception->getMessage());
        }
    }
}

echo 'done';

function isNewRecord($record, $conn)
{
    $date = DateTime::createFromFormat('d/m/Y', $record['Date']);
    $homeTeam = addslashes($record['HomeTeam']);
    $awayTeam = addslashes($record['AwayTeam']);

    $sql = "SELECT * FROM games WHERE gameDate = '{$date->format('Y-m-d')}' AND homeTeam = '{$homeTeam}' AND awayTeam = '{$awayTeam}'";
    $stmt = $conn->query($sql);

    $row = $stmt->fetch();

    if (empty($row)) {
        return true;
    }

    return false;
}




