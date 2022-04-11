<?php

session_start();
if (isset($_POST['login_submit'])) {
    $aid = $_POST['admin_id'];
    $apwd  = $_POST['admin_pwd'];

    if (empty($aid) || empty($apwd)) {
        
        header("Location: alogin.php?error=emptyfields");
        exit();
    }
    else {
        require '../includes/dbh.inc.php';
        
        $sql="SELECT * FROM tadmin WHERE admin_id = $aid";
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
            $row=mysqli_fetch_assoc($result);
            $taid   = $row["admin_id"];
            $tapass = $row["password"];
            if ( $taid == $aid ) {
                if ( $tapass == $apwd ) {
                    $_SESSION['admn'] = $row['admin_id'];
                    header("Location: aindex.php?login=success");
                    exit();
                }
                else {
                    header("Location: alogin.php?error=wrongpassword");
                    echo '<script>alert("Wrong password")</script>';
                    exit();
                }
            }
        }
    }
}