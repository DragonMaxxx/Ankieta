<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('127.0.0.1', 'root', '','db_ankieta');

// get the post records
$age = $_POST['age'];
    $plec = $_POST['plec'];
    $zawod = $_POST['zawod'];
    $wyksztalcenie = $_POST['wyksztalcenie'];
    $zamieszkanie = $_POST['zamieszkanie'];
    $czy_wizyta = $_POST['czy_wizyta'];
    $jak_czesto = $_POST['jak_czesto'];
    $czy_NFZ = $_POST['czy_NFZ'];
    $czy_prywatny = $_POST['czy_prywatny'];

// database insert SQL code
$sql = "INSERT INTO `tbl_ankieta` ('id','fldwek','fldplec','fldzawod','fldwyksztalcenie','fldzamieszkanie','fldczy_wizyta','fldjak_czesto','fldczy_NFZ','fldczy_prywatny') VALUES ('0',  '$age', 
'$plec',
'$zawod', 
'$wyksztalcenie', 
'$zamieszkanie',
'$czy_wizyta', 
'$jak_czesto', 
'$czy_NFZ', 
'$czy_prywatny')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>
