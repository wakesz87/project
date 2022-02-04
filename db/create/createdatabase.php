<?php

$conn = new PDO("mysql:host=localhost;",'root','');

$conn->query("CREATE DATABASE project");

if($conn){
    echo"Sikerült az adatbázis létrehozása!";
}else{
    echo"Nope, nincs adatbázis";
}

?>
