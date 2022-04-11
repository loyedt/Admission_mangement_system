<?php

if (isset($_POST['signup_submit'])) {
    
    $uname = $_POST['cname'];
    $phno = $_POST['cphno'];
    $pwd = $_POST['cpass'];
    $pwdr = $_POST['cpassr'];
    $cors1 = $_POST['crs1'];
    $cors2 = $_POST['crs2'];
    $cors3 = $_POST['crs3'];
    $cors4 = $_POST['crs4'];
    $cors5 = $_POST['crs5'];
    $cors6 = $_POST['crs6'];
    $cors7 = $_POST['crs7'];
    $st1 = $_POST['seat1'];
    $st2 = $_POST['seat2'];
    $st3 = $_POST['seat3'];
    $st4 = $_POST['seat4'];
    $st5 = $_POST['seat5'];
    $st6 = $_POST['seat6'];
    $st7 = $_POST['seat7'];
    $f=7;

    $csar = array("$cors1","$cors2","$cors3","$cors4","$cors5","$cors6","$cors7");
    $star = array("$st1","$st2","$st3","$st4","$st5","$st6","$st7");

    if ( empty($uname) || empty($phno) || empty($pwd) || empty($pwdr) || empty($cors1) || empty($st1) ) {
        
        header("Location: ../csignup.php?error=emptyfields&cname=".$uname."&cphno=".$phno);
        exit();
    }

    elseif ( (empty($cors1) xor empty($st1)) || (empty($cors2) xor empty($st2)) ||  (empty($cors3) xor empty($st3)) || (empty($cors4) xor empty($st4)) || (empty($cors5) xor empty($st5)) || (empty($cors6) xor empty($st6)) || (empty($cors7) xor empty($st7))) {
        
        header("Location: ../csignup.php?error=emptyfields&cname=".$uname."&cphno=".$phno);
        exit();
    }

    elseif ($pwd !== $pwdr) {
        header("Location: ../csignup.php?error=passwordcheck&cname=".$uname."&cphno=".$phno);
        exit();
    }

    else {

        require 'dbh.inc.php';
        
        for ($i=0; $i < 7; $i++) { 
            if (empty($csar[$i])) {
                $f=$i;
                break;
            }
        }
        for ($i=0; $i < $f; $i++) { 
            $sql ="INSERT INTO college (clg_name,course,seats,clg_phno,clg_pwd) VALUES('$uname','$csar[$i]','$star[$i]','$phno','$pwd')";
            mysqli_query($conn,$sql);
        }
        
        mysqli_close($conn);

        header("Location: ../index.php?signup=success");
        exit();
       
    }


}
else{
    header("Location: ../csignup.php");
    exit();
}