<?php



$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Root970303*";
$dbname = "EST_PB";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);



if(!$conn)
{
	die("No hay conxion: ".mysqli_connect_error());
}
?>

