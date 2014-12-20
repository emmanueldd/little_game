<?php
include('classes/player.php');
include('classes/filedatasource.php');
include('classes/idictionarybyline.php');
include('classes/modifier.php');
include('classes/playerfactory.php');
include('classes/weapon.php');

if (isset($_POST['submit']))
{
    if (isset($_FILES["csv"]["tmp_name"]))
    {
        $file_upload = new CsvDataSource($_FILES["csv"]["tmp_name"]);
    }
}

//$player1 = new Hunter('doudou');
//$player2 = new Hunter('foudou');
//echo 'Mon energie : ';
//
//$player1->getEnergy();
//echo '<br> points de vie de l adversaire : ';
//$player1->attack($player2);
//echo '<br> Je mappelle ';
//$player1->getName();

echo '<br><br><br><br><br><br><br>';

if (isset($player))
    $player[4]->getName();

?>

<form action="main.php" method="post" enctype="multipart/form-data">
    Selectionnez votre CSV:
    <input type="file" name="csv" id="csv">
    <input type="submit" value="Upload csv" name="submit">
</form><br>
Exemple d'un csv<br> <img src="includes/csv.png" width="200">