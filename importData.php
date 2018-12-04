<?php

require 'vendor/autoload.php';
require_once 'database.php';

use League\Csv\Reader;

//load the CSV document from a file path
$csv = Reader::createFromPath(__DIR__ . "/leagueTwo.csv", 'r');
$csv->setHeaderOffset(0);

foreach ($csv->getRecords() as $record) {
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
        echo "Created Game with ID  {$game->getId()}\n";
    } catch (Exception $exception) {
        error_log($exception->getMessage());
    }
}




