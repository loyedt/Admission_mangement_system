<?php

session_start();

require 'dbh.inc.php';

$stid = $_GET["sid"];
$ccnm = $_GET["ccn"];

$stat = "Approved";
$sql = "UPDATE students SET rqstat='$stat' WHERE st_id = $stid;";
if (mysqli_query($conn,$sql)) {
    $sql = "UPDATE college SET seats= seats-1 WHERE crg_id = $ccnm";
    if (mysqli_query($conn,$sql)) {
        header("Location: ../index.php?applied=success&cno=".$ccno."&sid=".$sid);
        exit();
    }
    else {
        header("Location: ../about.php?applied=success&cno=".$ccno."&sid=".$sid);
        exit();
    }
}