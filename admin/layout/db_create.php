<?php 
require("./db.php");

$sql = "CREATE TABLE em(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    userid VARCHAR(500) NOT NULL,
    username VARCHAR(500) NOT NULL,
    lan VARCHAR(500) NOT NULL,
    lat VARCHAR(500) NOT NULL,
    service VARCHAR(500) NOT NULL,
    data VARCHAR(500) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table em created successfully<br>";
} else {
    echo "Error creating table: em";
}

$sql = "CREATE TABLE users(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500) NOT NULL,
    ano VARCHAR(500) NOT NULL,
    age VARCHAR(500) NOT NULL,
    mobile VARCHAR(500) NOT NULL,
    password VARCHAR(500) NOT NULL,
    address VARCHAR(500) NOT NULL,
    gname VARCHAR(500) NOT NULL,
    gmobile VARCHAR(500) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully<br>";
} else {
    echo "Error creating table:users";
}



?>