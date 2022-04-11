<?php

session_start();

require 'dbh.inc.php';

$clg = $_GET["id1"];
$crs = $_GET["id2"];

$stat = "Applied";

$sid = $_SESSION['stid'];
$sql = "SELECT crg_id FROM college WHERE clg_name='$clg' AND course='$crs';";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
    $row = mysqli_fetch_assoc($result);
    $ccno = $row["crg_id"];
}


$sql = "UPDATE students SET crg_id='$ccno',rqstat='$stat' WHERE st_id = $sid;";
if (mysqli_query($conn,$sql)) {
    header("Location: ../index.php?applied=success&cno=".$ccno."&sid=".$sid);
    exit();
}
