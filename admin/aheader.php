<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="astyle.css">
    <link rel="stylesheet" href="alogin.css">
</head>
<body>
    <nav>
        <div class="leftside">
            <p>Easy Admissions</p>
        </div>
        <div class="rightside">
            <div>
              <?php
                if (isset($_SESSION['admn'])) {
                  echo '<ul>
                    <li><a href="aindex.php">HOME</a></li>
                    <li><a href="acolleges.php">COLLEGES</a></li>
                    <li><a href="astudents.php">STUDENTS</a></li>
                    <li><a href="areport.php">REPORTS</a></li>
                    <li>
                      <form action="../includes/logout.inc.php" method="post">
                         <button  class="logoutbtn" type="submit" name="logout-submit">LOGOUT</button>
                      </form>
                    </li>
                  </ul>';
                }
                else{
                    echo '<ul>
                        <li><a href="alogin.php">Admin Login</a></li>
                    </ul>';
                }
              ?>
            </div>
            
        </div>
    </nav>
</body>
</html>