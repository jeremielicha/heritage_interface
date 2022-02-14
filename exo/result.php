<?php
include "ISport.php";
include "Sport.php";
include "SportRelais.php";
include "SportBallon.php";
include "Comparable.php";
include "Club.php";
include "data.php";
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
//On verifie si club existe dans l'url
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
echo '<a href="index.php">Retour</a>';
echo "</fieldset>";
?>
</body>
</html>