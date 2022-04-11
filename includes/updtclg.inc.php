<?php

session_start();

if (isset($_POST['cupdate_submit'])) {
    $cphno   = $_POST['cnewphno'];
    $cpwd    = $_POST['cnewpwd'];
    $cpwdr   = $_POST['cnewpwdr'];
    if ( empty($cphno) and empty($cpwd) and empty($cpwdr)  ) {
        header("Location: ../cprofile.php?error=emptyfields&cnewphno=".$cphno);
        exit();
    }
    elseif ( !empty($cphno) and !empty($cpwd) and !empty($cpwdr)) {
        if ($cpwd != $cpwdr) {
            header("Location: ../cprofile.php?error=passwordcheck");
            exit();
        }
        $cnm = $_SESSION['clnm'];
        require 'dbh.inc.php';
        $sql ="UPDATE college SET clg_phno = '$cphno' , clg_pwd = '$cpwd' WHERE clg_name = '$cnm' ";
        mysqli_query($conn,$sql);
        
        mysqli_close($conn);

        header("Location: ../cprofile.php?updatephnoandpwd=success");
        exit();
    }
    elseif (!empty($cphno)) {
        $cnm = $_SESSION['clnm'];
        require 'dbh.inc.php';
        $sql ="UPDATE college SET clg_phno = $cphno WHERE clg_name = '$cnm' ";
        mysqli_query($conn,$sql);
        
        mysqli_close($conn);

        header("Location: ../cprofile.php?updatephno=success");
        exit();
    }
    else {
        if ($cpwd != $cpwdr) {
            header("Location: ../cprofile.php?error=passwordcheck");
            exit();
        }
        $cnm = $_SESSION['clnm'];
        require 'dbh.inc.php';
        $sql ="UPDATE college SET clg_pwd = '$cpwd' WHERE clg_name = '$cnm' ";
        mysqli_query($conn,$sql);
        
        mysqli_close($conn);

        header("Location: ../cprofile.php?updatepwd=success");
        exit();
    }
}