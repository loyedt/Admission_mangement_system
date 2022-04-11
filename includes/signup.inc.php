<?php

if(isset($_POST['signup_submit'])){

    $username = $_POST['st_name'];
    $dob = $_POST['dob'];
    $mark = $_POST['mark'];
    $phno = $_POST['st_phno'];
    $pwd = $_POST['st_pass'];
    $pwdr = $_POST['st_passr'];

    if ( empty($username) || empty($dob) || empty($mark) || empty($phno) || empty($pwd) || empty($pwdr)){
    
        header("Location: ../signup.php?error=emptyfields&st_name=".$username."&dob=".$dob."&mark=".$mark."&st_phno=".$phno);
        exit();
    }
    else if($pwd !== $pwdr){
        header("Location: ../signup.php?error=passwordcheck&st_name=".$username."&dob=".$dob."&mark=".$mark."&st_phno=".$phno);
        exit();
    }
    else {
        require 'dbh.inc.php';

        $sql ="INSERT INTO students (st_name,dob,st_phno,mark,st_pwd,signupdate) VALUES('$username','$dob','$phno','$mark','$pwd',sysdate())";
        mysqli_query($conn,$sql);
        
        mysqli_close($conn);

        header("Location: ../index.php?signup=success");
        exit();
    }
}
else {
    header("Location: ../signup.php");
    exit();
}