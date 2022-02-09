<?php

class SportRelais extends Sport
{
    private $distance;

    /**
     * @param $distance
     */
    public function __construct(string $nomSport,int $nbJoueurs, int $distance)
    {
        parent::__construct($nomSport,$nbJoueurs);
        $this->distance = $distance;
    }


    /**
     * @return mixed
     */
    public function getDistance(): int
    {
        return $this->distance;
    }

    /**
     * @param mixed $distance
     */
    public function setDistance($distance): void
    {
        $this->distance = $distance;
    }

    public function getDescription(): string
    {
        return parent::getDescription()."<br>"."Distance : "."$this->distance";
    }
}