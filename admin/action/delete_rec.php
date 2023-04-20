<?php
require("../layout/db.php");

$id= $_POST['id'];

$sql = "DELETE FROM em WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/emergency.php?page=1&msg=Request Deleted Successfully !");
    die();
} else {
    header("Location: /admin/emergency.php?page=1&err=Something went Wrong!");
    die();
}


?>