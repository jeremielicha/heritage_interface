<?php
include "ISport.php";
include "Sport.php";
include "SportRelais.php";
include "SportBallon.php";
include "Comparable.php";
include "Club.php";

$listClub[] = new Club(1,"Dijon 63",0);
$listClub[] = new Club(2,"PDG 67",547);
$listClub[] = new Club(3,"Nantes 65",239);

$listClub[0]->AjouterSport($listSport[] = new SportRelais("nomRelais1", 31, 200));
$listClub[0]->AjouterSport($listSport[] = new Sport("Football ",11));
$listClub[0]->AjouterSport($listSport[] = new Sport("eSport ",10));
$listClub[0]->AjouterSport($listSport[] = new Sport("Braquage ",4));

$listClub[1]->AjouterSport($listSport[] = new SportRelais("4100 ",1,400));
$listClub[1]->AjouterSport($listSport[] = new SportRelais("100m ",1,100));
$listClub[1]->AjouterSport($listSport[] = new SportRelais("200m ",1,200));

$listClub[2]->AjouterSport($listSport[] = new SportRelais("Course poursuite ",2,700));
$listClub[2]->AjouterSport($listSport[] = new SportBallon("Handball ",8,40,50));
$listClub[2]->AjouterSport($listSport[] = new SportBallon("Handball ",8,40,50));

foreach ($listClub as $keyListClub => $valueListClub)
    {
        echo '<a href="index.php">Club : </a>'.$valueListClub->getNomClub()."<br><br>";
    }


if(!(empty($_POST[""])))
{
    if($_POST["idClub"] == "1")
    {
        echo "Welcome comp";
    }
    else
    {
        echo "Wrong user";
    }
}