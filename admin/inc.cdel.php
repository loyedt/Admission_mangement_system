<?php

session_start();

require '../includes/dbh.inc.php';
$cnm = $_GET["id1"];
$sql = "DELETE FROM college WHERE clg_name = '$cnm';";
mysqli_query($conn,$sql);
mysqli_close($conn);
header("Location: acolleges.php?recorddelete=success");
exit();
