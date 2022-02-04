<?php

$conn = new PDO("mysql:host=localhost;dbname=project",'root','');

$conn->query("CREATE TABLE customers(
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    pass VARCHAR(100) NOT NULL,
    tax_number INT(10) NOT NULL,
    delivery_addr VARCHAR(100) NOT NULL,
    billing_addr VARCHAR(100) NOT NULL
)");

if($conn){
    echo"Sikerült a tábla létrehozása";
}else{
    echo"Nope, nincs tábla"; 
}

?>
