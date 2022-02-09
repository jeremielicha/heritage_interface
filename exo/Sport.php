<?php

class sport implements ISport
{
    private $nomSport;
    private $nbJoueurs;

    /**
     * @param $nomSport
     * @param $nbJoueurs
     */
    public function __construct(string $nomSport, int $nbJoueurs)
    {
        $this->nomSport = $nomSport;
        $this->nbJoueurs = $nbJoueurs;
    }

    /**
     * @return mixed
     */
    public function getNomSport()
    {
        return $this->nomSport;
    }

    /**
     * @param mixed $nomSport
     */
    public function setNomSport($nomSport): void
    {
        $this->nomSport = $nomSport;
    }

    /**
     * @return mixed
     */
    public function getNbJoueurs()
    {
        return $this->nbJoueurs;
    }

    /**
     * @param mixed $nbJoueurs
     */
    public function setNbJoueurs($nbJoueurs): void
    {
        $this->nbJoueurs = $nbJoueurs;
    }

    public function getDescription():string
    {
        return "Nom du sport : ".$this->nomSport."<br>"."Nombre de joueur : ".$this->nbJoueurs;
    }

}