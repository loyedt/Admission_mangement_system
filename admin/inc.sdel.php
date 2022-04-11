<?php

session_start();

require '../includes/dbh.inc.php';
$sid = $_GET["id1"];
$flag = $_GET["fl"];
if ($flag == 'rp') {
    $sql = "DELETE FROM students WHERE st_id = $sid ;";
    mysqli_query($conn,$sql);
    $sql2 = "DELETE FROM report WHERE st_id = $sid ;";
    mysqli_query($conn,$sql2);
    mysqli_close($conn);
    header("Location: astudents.php?recorddelete=success");
    exit(); 
}
else {
    $sql = "DELETE FROM students WHERE st_id = $sid ;";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("Location: astudents.php?recorddelete=success");
    exit(); 
}
