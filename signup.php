<?php 
require("./admin/layout/db.php");

$name = $_POST["name"];
$password = $_POST["password"];
$mobile = $_POST["mobile"];
$address = $_POST["address"];
$age = $_POST["age"];
$ano = $_POST["ano"];
$gname = $_POST["gname"];
$gmobile = $_POST["gmobile"];

$sql = "INSERT INTO users(name,password,mobile,address,age,ano,gname,gmobile) VALUES('$name','$password','$mobile','$address','$age','$ano','$gname','$gmobile');";

try {
    $conn->query($sql);
    header("Location:/?msg=Account Created Successfully!");
    die();
} catch (Exception $e) {
    header("Location:/?err=Something Went Wrong!");
    die();
}

?>