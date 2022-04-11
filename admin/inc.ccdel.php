<?php

session_start();

require '../includes/dbh.inc.php';
$cid = $_GET["id1"];
$sql = "DELETE FROM college WHERE crg_id = '$cid';";
mysqli_query($conn,$sql);
mysqli_close($conn);
header("Location: acolleges.php?recorddelete=success");
exit();
