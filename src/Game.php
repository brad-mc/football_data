<?php

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;

/**
 * @Entity @Table(name="games")
 **/
class Game
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="string") **/
    protected $division;
    /** @Column(type="date") **/
    protected $gameDate;
    /** @Column(type="string") **/
    protected $homeTeam;
    /** @Column(type="string") **/
    protected $awayTeam;
    /** @Column(type="integer") **/
    protected $fullTimeHomeGoals;
    /** @Column(type="integer") **/
    protected $fullTimeAwayGoals;
    /** @Column(type="string") **/
    protected $fullTimeResult;
    /** @Column(type="integer") **/
    protected $halfTimeHomeGoals;
    /** @Column(type="integer") **/
    protected $halfTimeAwayGoals;
    /** @Column(type="string") **/
    protected $halfTimeResult;
    /** @Column(type="integer") **/
    protected $homeShots;
    /** @Column(type="integer") **/
    protected $awayShots;
    /** @Column(type="integer") **/
    protected $homeShotsOnTarget;
    /** @Column(type="integer") **/
    protected $awayShotsOnTarget;
    /** @Column(type="integer") **/
    protected $homeFouls;
    /** @Column(type="integer") **/
    protected $awayFouls;
    /** @Column(type="integer") **/
    protected $homeCorners;
    /** @Column(type="integer") **/
    protected $awayCorners;
    /** @Column(type="integer") **/
    protected $homeYellows;
    /** @Column(type="integer") **/
    protected $awayYellows;
    /** @Column(type="integer") **/
    protected $homeReds;
    /** @Column(type="integer") **/
    protected $awayReds;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * @param mixed $division
     */
    public function setDivision($division)
    {
        $this->division = $division;
    }

    /**
     * @return mixed
     */
    public function getGameDate()
    {
        return $this->gameDate;
    }

    /**
     * @param mixed $gameDate
     */
    public function setGameDate($gameDate)
    {
        $this->gameDate = $gameDate;
    }

    /**
     * @return mixed
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    /**
     * @param mixed $homeTeam
     */
    public function setHomeTeam($homeTeam)
    {
        $this->homeTeam = $homeTeam;
    }

    /**
     * @return mixed
     */
    public function getAwayTeam()
    {
        return $this->awayTeam;
    }

    /**
     * @param mixed $awayTeam
     */
    public function setAwayTeam($awayTeam)
    {
        $this->awayTeam = $awayTeam;
    }

    /**
     * @return mixed
     */
    public function getFullTimeHomeGoals()
    {
        return $this->fullTimeHomeGoals;
    }

    /**
     * @param mixed $fullTimeHomeGoals
     */
    public function setFullTimeHomeGoals($fullTimeHomeGoals)
    {
        $this->fullTimeHomeGoals = $fullTimeHomeGoals;
    }

    /**
     * @return mixed
     */
    public function getFullTimeAwayGoals()
    {
        return $this->fullTimeAwayGoals;
    }

    /**
     * @param mixed $fullTimeAwayGoals
     */
    public function setFullTimeAwayGoals($fullTimeAwayGoals)
    {
        $this->fullTimeAwayGoals = $fullTimeAwayGoals;
    }

    /**
     * @return mixed
     */
    public function getFullTimeResult()
    {
        return $this->fullTimeResult;
    }

    /**
     * @param mixed $fullTimeResult
     */
    public function setFullTimeResult($fullTimeResult)
    {
        $this->fullTimeResult = $fullTimeResult;
    }

    /**
     * @return mixed
     */
    public function getHalfTimeHomeGoals()
    {
        return $this->halfTimeHomeGoals;
    }

    /**
     * @param mixed $halfTimeHomeGoals
     */
    public function setHalfTimeHomeGoals($halfTimeHomeGoals)
    {
        $this->halfTimeHomeGoals = $halfTimeHomeGoals;
    }

    /**
     * @return mixed
     */
    public function getHalfTimeAwayGoals()
    {
        return $this->halfTimeAwayGoals;
    }

    /**
     * @param mixed $halfTimeAwayGoals
     */
    public function setHalfTimeAwayGoals($halfTimeAwayGoals)
    {
        $this->halfTimeAwayGoals = $halfTimeAwayGoals;
    }

    /**
     * @return mixed
     */
    public function getHalfTimeResult()
    {
        return $this->halfTimeResult;
    }

    /**
     * @param mixed $halfTimeResult
     */
    public function setHalfTimeResult($halfTimeResult)
    {
        $this->halfTimeResult = $halfTimeResult;
    }

    /**
     * @return mixed
     */
    public function getHomeShots()
    {
        return $this->homeShots;
    }

    /**
     * @param mixed $homeShots
     */
    public function setHomeShots($homeShots)
    {
        $this->homeShots = $homeShots;
    }

    /**
     * @return mixed
     */
    public function getAwayShots()
    {
        return $this->awayShots;
    }

    /**
     * @param mixed $awayShots
     */
    public function setAwayShots($awayShots)
    {
        $this->awayShots = $awayShots;
    }

    /**
     * @return mixed
     */
    public function getHomeShotsOnTarget()
    {
        return $this->homeShotsOnTarget;
    }

    /**
     * @param mixed $homeShotsOnTarget
     */
    public function setHomeShotsOnTarget($homeShotsOnTarget)
    {
        $this->homeShotsOnTarget = $homeShotsOnTarget;
    }

    /**
     * @return mixed
     */
    public function getAwayShotsOnTarget()
    {
        return $this->awayShotsOnTarget;
    }

    /**
     * @param mixed $awayShotsOnTarget
     */
    public function setAwayShotsOnTarget($awayShotsOnTarget)
    {
        $this->awayShotsOnTarget = $awayShotsOnTarget;
    }

    /**
     * @return mixed
     */
    public function getHomeFouls()
    {
        return $this->homeFouls;
    }

    /**
     * @param mixed $homeFouls
     */
    public function setHomeFouls($homeFouls)
    {
        $this->homeFouls = $homeFouls;
    }

    /**
     * @return mixed
     */
    public function getAwayFouls()
    {
        return $this->awayFouls;
    }

    /**
     * @param mixed $awayFouls
     */
    public function setAwayFouls($awayFouls)
    {
        $this->awayFouls = $awayFouls;
    }

    /**
     * @return mixed
     */
    public function getHomeCorners()
    {
        return $this->homeCorners;
    }

    /**
     * @param mixed $homeCorners
     */
    public function setHomeCorners($homeCorners)
    {
        $this->homeCorners = $homeCorners;
    }

    /**
     * @return mixed
     */
    public function getAwayCorners()
    {
        return $this->awayCorners;
    }

    /**
     * @param mixed $awayCorners
     */
    public function setAwayCorners($awayCorners)
    {
        $this->awayCorners = $awayCorners;
    }

    /**
     * @return mixed
     */
    public function getHomeYellows()
    {
        return $this->homeYellows;
    }

    /**
     * @param mixed $homeYellows
     */
    public function setHomeYellows($homeYellows)
    {
        $this->homeYellows = $homeYellows;
    }

    /**
     * @return mixed
     */
    public function getAwayYellows()
    {
        return $this->awayYellows;
    }

    /**
     * @param mixed $awayYellows
     */
    public function setAwayYellows($awayYellows)
    {
        $this->awayYellows = $awayYellows;
    }

    /**
     * @return mixed
     */
    public function getHomeReds()
    {
        return $this->homeReds;
    }

    /**
     * @param mixed $homeReds
     */
    public function setHomeReds($homeReds)
    {
        $this->homeReds = $homeReds;
    }

    /**
     * @return mixed
     */
    public function getAwayReds()
    {
        return $this->awayReds;
    }

    /**
     * @param mixed $awayReds
     */
    public function setAwayReds($awayReds)
    {
        $this->awayReds = $awayReds;
    }
}