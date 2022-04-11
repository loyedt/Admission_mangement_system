<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Admissions</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="loginst.css">
    <link rel="stylesheet" href="signupst.css">
    <link rel="stylesheet" href="csignupst.css">
    <link rel="stylesheet" href="sprofile.css">
    <link rel="stylesheet" href="cprofile.css">
    <link rel="stylesheet" href="report.css">
    
</head>
<body>

<nav>
            <div class="leftside">
                <p>Easy Admissions</p>
            </div>
            <div class="rightside">
                <div>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        
                        <?php
                           if (isset($_SESSION['clnm'])) {
                               echo'<li><a href="appli.php">Applicants</a></li>';
                           }
                           else{
                               echo '<li><a href="colleges.php">COLLEGES</a></li>
                                     <li><a href="courses.php">Courses</a></li>';
                           }
                        ?>
                        
                        <li><a href="about.php">About</a></li>
                        <?php
                           if ((isset($_SESSION['stnm'])) || (isset($_SESSION['clnm']))){

                           }
                           else {
                              echo '<li><a href="#">Login</a>
                                       <ul>
                                            <li><a href="login.php">Student login</a></li>
                                            <li><a href="clogin.php">College Login</a></li>
                                       </ul>
                                    </li>'; 
                           }
                           if ((isset($_SESSION['stnm'])) || (isset($_SESSION['clnm']))){
                            if (isset($_SESSION['stnm'])) {
                                echo '<li><a href="#">'.$_SESSION['stnm'].'</a>
                                           <ul>
                                                <li><a href="sprofile.php">Profile</a></li>
                                                <li><form action="includes/logout.inc.php" method="post">
                                                        <button  class="logoutbtn" type="submit" name="logout-submit">LOGOUT</button>
                                                    </form>
                                                </li>
                                           </ul>
                                        </li>'; 
                            }
                            elseif (isset($_SESSION['clnm'])) {
                                echo '<li><a href="#">'.$_SESSION['clnm'].'</a>
                                         <ul>
                                           <li><a href="cprofile.php">Profile</a></li>
                                           <li><a href="report.php">Report</a></li>
                                           <li>
                                               <form action="includes/logout.inc.php" method="post">
                                                    <button  class="logoutbtn" type="submit" name="logout-submit">LOGOUT</button>
                                               </form>
                                           </li>
                                          </ul>
                                      </li>'; 
                            }
                        }

                        ?>
                        
        
                    </ul> 
                </div>
                
                
            </div>
            
            
           
        </nav>
        