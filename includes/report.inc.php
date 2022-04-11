<?php

session_start();

if (isset($_POST['report_submit'])) {
    $sid = $_POST['sid'];
    $reason  = $_POST['reason'];
    if (empty($sid) || empty($reason)) {
        
        header("Location: ../report.php?error=emptyfields&sid=".$sid);
        exit();
    }
    else {

        require 'dbh.inc.php';
        $cnm = $_SESSION['clnm'];
        $sql ="INSERT INTO report (st_id,clg_name,reason) VALUES('$sid','$cnm','$reason')";
        mysqli_query($conn,$sql);
        
        mysqli_close($conn);

        header("Location: ../report.php?report=success");
        exit();
    }
}