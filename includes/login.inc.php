<?php

session_start();

if (isset($_POST['login_submit'])) {
    

    $username = $_POST['st_name'];
    $pwd  = $_POST['st_pass'];

    if (empty($username) || empty($pwd)) {
        echo "<SCRIPT> 
        
        window.location.replace('../login.php');
        alert('empty fields')
        </SCRIPT>";
    }

    else {

        require 'dbh.inc.php';
        
        $sql="SELECT * FROM students WHERE st_name='$username'";
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
            $row=mysqli_fetch_assoc($result);
            $uname=$row["st_name"];
            $pass=$row["st_pwd"];
            if ($username==$uname) {
                if ($pwd==$pass) {
                    $_SESSION['stid']=$row['st_id'];
                    $_SESSION['stnm']=$row['st_name'];
                    header("Location: ..//index.php?login=success");
                    exit();
                }
                else {
                    echo "<SCRIPT> 
                    window.location.replace('../login.php');
                    alert('Wrong password')
                    </SCRIPT>";
                }
            }
        }
        else {
            echo "<SCRIPT> 
                    window.location.replace('../login.php?error=invalid_username');
                    alert('Invalid username')
                  </SCRIPT>";
        }
        mysqli_close($conn);
    }

   
    
}
else {
    header("Location: ../login.php");
    exit();
}
/*
echo '<script>alert("Wrong password")</script>'; 
                    header("Location: ../login.php?error=wrongpassword&st_name=".$username);
                   
                    exit();
*/