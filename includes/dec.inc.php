<?php

session_start();

require 'dbh.inc.php';

$stid = $_GET["sid"];
$stat = "Declined";

$sql = "UPDATE students SET rqstat='$stat' WHERE st_id= $stid;";
if (mysqli_query($conn,$sql)) {
    header("Location: ../appli.php?decline=success");
    exit();
}