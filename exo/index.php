<?php
include "ISport.php";
include "Sport.php";
include "SportRelais.php";
include "SportBallon.php";
include "Comparable.php";
include "Club.php";
    echo "Projet heritage et interface"."<br><br>";

$listClub[1]=new Club(1, "club1", 120);
$listClub[1]=new Club(2, "club2", 110);
$listClub[1]=new Club(3, "club3", 80);

$listClub[1]->AjouterSport($listSport[] =new Sport("Football", 23));
$listClub[1]->AjouterSport($listSport[]=new SportRelais("nomSportRelais1", 15, 456));

$listClub[2]->AjouterSport($listSport[]=new SportBallon("nomSportBallon1", 154, 2000, 50));
$listClub[2]->AjouterSport($listSport[]=new SportRelais("nomSportRelais2", 155, 1000));

$listSport[] =new Sport("Football", 23);
$listSport[] =new Sport("Basket", 12);
$listSport[] =new Sport("HandBall", 11);
$listSport[]=new SportRelais("nomSportRelais1", 15, 456);
$listSport[]=new SportRelais("nomSportRelais2", 155, 1000);
$listSport[]=new SportRelais("nomSportRelais3", 100, 1500);
$listSport[]=new SportBallon("nomSportBallon1", 154, 2000, 50);
$listSport[]=new SportBallon("nomSportBallon2", 25, 350, 4000);

foreach ($listSport as $keyListSport=>$valueListSport)
{
    echo $valueListSport->getDescription()."<br><br>";
}