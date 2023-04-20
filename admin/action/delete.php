<?php
require("../layout/db.php");

$id= $_GET['id'];

$sql = "DELETE FROM users WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/users.php?page=1&msg=User Deleted Successfully !");
    die();
} else {
    header("Location: /admin/users.php?page=1&err=Something went Wrong!");
    die();
}


?>