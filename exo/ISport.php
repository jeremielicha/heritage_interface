<?php

interface ISport
{
    /**
     * @return mixed
     * Renvoi du nom du sport
     */
    public function getNomSport();

    /**
     * @return mixed
     * Renvoi de la description du sport
     */
    public function getDescription();
}