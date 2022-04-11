<?php

session_start();

if (isset($_POST['supdate_submit'])) {
    $sphno   = $_POST['snewphno'];
    $spwd    = $_POST['snewpwd'];
    $spwdr   = $_POST['snewpwdr'];
    if ( empty($sphno ) and empty($spwd) and empty($spwdr)  ) {
        header("Location: ../sprofile.php?error=emptyfields&snewphno=".$sphno);
        exit();
    }
    elseif ( !empty($sphno ) and !empty($spwd) and !empty($spwdr)) {
        if ($spwd != $spwdr) {
            header("Location: ../sprofile.php?error=passwordcheck");
            exit();
        }
        $sid = $_SESSION['stid'];
        require 'dbh.inc.php';
        $sql ="UPDATE students SET st_phno = '$sphno' , st_pwd = '$spwd' WHERE st_id = $sid ";
        mysqli_query($conn,$sql);
        
        mysqli_close($conn);

        header("Location: ../sprofile.php?updatephnoandpwd=success");
        exit();
    }
    elseif (!empty($sphno)) {
        $sid = $_SESSION['stid'];
        require 'dbh.inc.php';
        $sql ="UPDATE students SET st_phno = $sphno WHERE st_id = $sid ";
        mysqli_query($conn,$sql);
        
        mysqli_close($conn);

        header("Location: ../sprofile.php?updatephno=success");
        exit();
    }
    else {
        if ($spwd != $spwdr) {
            header("Location: ../sprofile.php?error=passwordcheck");
            exit();
        }
        $sid = $_SESSION['stid'];
        require 'dbh.inc.php';
        $sql ="UPDATE students SET st_pwd = '$spwd' WHERE st_id = $sid ";
        mysqli_query($conn,$sql);
        
        mysqli_close($conn);

        header("Location: ../sprofile.php?updatepwd=success");
        exit();
    }
}