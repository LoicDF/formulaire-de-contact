<?php 

$sname= "localhost";
$unmae= "root";
$password= "root";

$db_name = "test-bdd-formulaire";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if(!$conn){
    echo "connection a la base de donnée échoué";
}