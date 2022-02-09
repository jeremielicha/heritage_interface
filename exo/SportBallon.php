<?php

class SportBallon extends Sport
{
    private $largeur;
    private $longueur;

    /**
     * @param $largeur
     * @param $longueur
     */
    public function __construct(string $nomSport, string $nbJoueurs, int $largeur, int $longueur)
    {
        parent::__construct($nomSport, $nbJoueurs);
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }

    /**
     * @return int
     */
    public function getLargeur(): int
    {
        return $this->largeur;
    }

    /**
     * @param int $largeur
     */
    public function setLargeur(int $largeur): void
    {
        $this->largeur = $largeur;
    }

    /**
     * @return int
     */
    public function getLongueur(): int
    {
        return $this->longueur;
    }

    /**
     * @param int $longueur
     */
    public function setLongueur(int $longueur): void
    {
        $this->longueur = $longueur;
    }

    public function getDescription(): string
    {
        return parent::getDescription()."<br>"."Longueur : ".$this->getLongueur()."<br>"."Largeur : ".$this->getLargeur();
    }

}