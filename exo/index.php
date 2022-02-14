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
$listClub[0]->AjouterSport($listSport[] = new Sport("Football",11));
$listClub[0]->AjouterSport($listSport[] = new Sport("eSport",10));

$listClub[1]->AjouterSport($listSport[] = new SportRelais("4100",1,400));
$listClub[1]->AjouterSport($listSport[] = new SportRelais("100m",1,100));
$listClub[1]->AjouterSport($listSport[] = new SportRelais("200m",1,200));

$listClub[2]->AjouterSport($listSport[] = new SportRelais("Course poursuite",2,700));
$listClub[2]->AjouterSport($listSport[] = new SportBallon("Handball",8,40,50));
$listClub[2]->AjouterSport($listSport[] = new SportBallon("Badminton",8,40,50));
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Heritage et Interface</title>
</head>
<body>
    <?php
        echo "<fieldset>";
        echo "<legend><h1>Liste des clubs</h1></legend>";
        foreach ($listClub as $keyListClub => $club)
        {
            //Methode d'interpolation
            echo "<a href=index.php?club={$keyListClub}>{$club->getIdClub()}"." : "."{$club->getNomClub()}</a><br><br>";
        }

        echo "<a href=index.php?sports>Liste de tout sports</a>";
        echo "</fieldset>";

        //On verifie si club existe dans l'url
        echo "<fieldset>";
        if(isset($_GET["club"]))
        {
            //parcours les sports du club cliqué
            echo "<legend><h1>".$listClub[$_GET["club"]]->getNomClub()."</h1></legend>";
            foreach ($listClub[$_GET["club"]]->getLesSports() as $keySport=>$sport)
            {
                echo $sport->getDescription()."<br><br>";
            }
        }
        else if(isset($_GET["sports"]))
        {
            echo "<legend><h1>"."Tous les sports"."</h1></legend>";
            foreach ($listSport as $keyListSport=>$sport)
            {
                echo $sport->getDescription()."<br><br>";
            }
        }
        echo "</fieldset>";
    ?>
</body>
</html>