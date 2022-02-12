<?php

class Club implements Comparable
{
    private $idClub;
    private $nomClub;
    private $nbPoint;
    private $lesSports=array();

    /**
     * @param $idClub
     * @param $nomClub
     * @param $nbPoint
     * @param array $lesSports
     */
    public function __construct($idClub, $nomClub, $nbPoint)
    {
        $this->idClub = $idClub;
        $this->nomClub = $nomClub;
        $this->nbPoint = $nbPoint;
    }

    /**
     * @return mixed
     */
    public function getIdClub()
    {
        return $this->idClub;
    }

    /**
     * @param mixed $idClub
     */
    public function setIdClub($idClub): void
    {
        $this->idClub = $idClub;
    }

    /**
     * @return mixed
     */
    public function getNomClub()
    {
        return $this->nomClub;
    }

    /**
     * @param mixed $nomClub
     */
    public function setNomClub($nomClub): void
    {
        $this->nomClub = $nomClub;
    }

    /**
     * @return mixed
     */
    public function getNbPoint()
    {
        return $this->nbPoint;
    }

    /**
     * @param mixed $nbPoint
     */
    public function setNbPoint($nbPoint): void
    {
        $this->nbPoint = $nbPoint;
    }

    /**
     * @return array
     */
    public function getLesSports(): array
    {
        return $this->lesSports;
    }

    /**
     * @param array $lesSports
     */
    public function setLesSports(array $lesSports): void
    {
        $this->lesSports = $lesSports;
    }

    public function AjouterSport(Sport $sport)
    {
        $this->lesSports[]=$sport;
    }

    public function compareTo(Club $club)
    {
        // TODO: Implement compareTo() method.
    }
}