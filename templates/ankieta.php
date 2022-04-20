<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$host = 'localhost';
$user = '';
$pass = '';
$dbname = 'db_ankieta';

$con = mysqli_connect($host,$user,$pass,$dbname);

if(!$link){
    die('Ie mozna polaczyc : '.mysqli_error());
}
$db_select = mysqli_select_db($dbname);
if(!$db_select){
    die('Cant use '.$dbname.mysqli_error());
}
// get the post records
$wiek = $_POST['wiek'];
    $plec = $_POST['plec'];
    $zawod = $_POST['zawod'];
    $wyksztalcenie = $_POST['wyksztalcenie'];
    $zamieszkanie = $_POST['zamieszkanie'];
    $czy_wizyta = $_POST['czy_wizyta'];
    $jak_czesto = $_POST['jak_czesto'];
    $czy_NFZ = $_POST['czy_NFZ'];
    $czy_prywatny = $_POST['czy_prywatny'];

// database insert SQL code
$query = "INSERT INTO `tbl_ankieta` (`id`, `plec`, `wiek`, `zawod`, `wyksztalcenie`, `zamieszkanie`, `czy_wizyta`, `jak_czesto`, `czy_NFZ`, `czy_prywatny`) VALUES (NULL, $plec,$wiek,$zawod,$wyksztalcenie,$zamieszkanie,$czy_wizyta,$jak_czesto,$czy_NFZ,$czy_prywatny);";

if(!mysqli_query($query)){
    die(":(");
}else{echo ":)";}

mysqli_close();
?>
