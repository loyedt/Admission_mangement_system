<?php

session_start();

if (isset($_POST['login_submit'])) {
    
    $cnm = $_POST['cname'];
    $pwd = $_POST['cpass'];

    if (empty($cnm) || empty($pwd)) {
        
        header("Location: ../clogin.php?error=emptyfields&cname=".$cnm);
        exit();
    }
    else {

        require 'dbh.inc.php';

        $sql="SELECT * FROM college WHERE clg_name='$cnm'";
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
            $row=mysqli_fetch_assoc($result);
            $unm=$row["clg_name"];
            $pass=$row["clg_pwd"];
            if ($cnm == $unm){
                if ($pwd == $pass) {
                    $_SESSION['clnm']=$row['clg_name'];
                    header("Location: ..//index.php?login=success");
                    exit();
                }
                else {
                    echo '<script>alert("Wrong password")</script>';
                }
                }
            }
            else {
                echo '<script>alert("Username does not exist")</script>';
           }
    }
}


else {
    header("Location: ../clogin.php");
    exit();
}