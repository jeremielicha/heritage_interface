<?php
include "ISport.php";
include "Sport.php";
include "SportRelais.php";
include "SportBallon.php";
include "Comparable.php";
include "Club.php";
include "data.php";

$connect = new PDO('mysql:host=127.0.0.1;dbname=gestion_club', username: "root", password: "");
$requete=$connect->query('Select * from club');
foreach ($requete as $row)
{
    print_r($row);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Heritage et Interface</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        echo "<fieldset>";
        echo "<legend><h1>Liste des clubs</h1></legend>";
        foreach ($listClub as $keyListClub => $club)
        {
            //Methode d'interpolation
            echo "<a href=result.php?club={$keyListClub}>{$club->getIdClub()}"." : "."{$club->getNomClub()}</a><br><br>";
        }
    ?>
    </fieldset>
    <br>
    <form method='post' name='formIdClub' action='result.php'>
        <select name="club" id="club-select">
            <?php
            echo "<option value='choix' selected disabled>---Choix Clubs---</option>";
            foreach ($listClub as $keyClub=>$club)
            {
                echo "<option value={$keyClub}>{$club->getNomClub()}</option>";
            }
            ?>
        </select>
        <br><br>
        <button type='submit'>Envoie</button>
    </form>
</body>
</html>