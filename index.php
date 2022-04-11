<?php
    require 'header.php';
    require 'includes/dbh.inc.php';
?>

<main>
   <div class="indexwrapper">
   <?php
      
      if (isset($_SESSION['clnm'])) {
        echo '<div class="cclist">';
          $cnm = $_SESSION['clnm'];
          echo '<table>';
            echo '<tr>';
              echo "<th> Courses </th>";
              echo "<th> Seats </th>";
            echo '</tr>';
            $sql = "SELECT course,seats FROM college WHERE clg_name='$cnm';";
            $result = mysqli_query($conn,$sql);
            $resultcheck = mysqli_num_rows($result);
            if ( $resultcheck > 0 ) {
                while ($rid = mysqli_fetch_array($result)) {
                    echo "<tr>";
                       echo "<td>" . $rid[0] ."</td>";
                       echo "<td>" . $rid[1] ."</td>";
                    echo "</tr>";
                }
            }
          echo '</table>';
        echo '</div>';
      }
    elseif (isset($_SESSION['stid'])) {
        $sid = $_SESSION['stid'];
        $sql = "SELECT crg_id,rqstat FROM students WHERE st_id = '$sid';";
        $result = mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);
        if ( $resultcheck > 0 ) {
            while ($rid = mysqli_fetch_array($result)) {
                if ($rid[0] == NULL & $rid[1] == NULL) {
                    echo '<div class="shome">
                             <p>You have not applied for any courses.</p>
                          </div>';
                }
                elseif ($rid[1] == "Applied") {
                    $sql2 = "SELECT clg_name,course FROM college WHERE crg_id ='$rid[0]';";
                    $result2 = mysqli_query($conn,$sql2);
                    $resultcheck2 = mysqli_num_rows($result2);
                    if ($resultcheck2 > 0) {
                        while ($rid2 = mysqli_fetch_array($result2)) {
                            echo '<div class="shome">
                                    <p>You are waiting for reply from '.$rid2[0].' for '.$rid2[1].' course.</p>
                                 </div>';
                        }
                    }
                }
                elseif ($rid[1] == "Approved") {
                    $sql2 = "SELECT clg_name,course FROM college WHERE crg_id ='$rid[0]';";
                    $result2 = mysqli_query($conn,$sql2);
                    $resultcheck2 = mysqli_num_rows($result2);
                    if ($resultcheck2 > 0) {
                        while ($rid2 = mysqli_fetch_array($result2)) {
                            echo '<div class="shome">
                                    <p>'. $rid2[0].' has accepted your admission request for '.$rid2[1].' course</p>
                                    <p class="secp">The college will contact you for an interview very soon. </p>
                                 </div>';
                        }
                    }
                }
                elseif ($rid[1] == "Declined") {
                    $sql2 = "SELECT clg_name,course FROM college WHERE crg_id ='$rid[0]';";
                    $result2 = mysqli_query($conn,$sql2);
                    $resultcheck2 = mysqli_num_rows($result2);
                    if ($resultcheck2 > 0) {
                        while ($rid2 = mysqli_fetch_array($result2)) {
                            echo '<div class="shome">
                                    <p>'. $rid2[0].' has declined your admission request for '.$rid2[1].' course</p>
                                    <p class="secp">You can apply for another college having '.$rid2[1].' course.. </p>
                                 </div>';
                            
                        }
                    }
                }

            }
         }
    }
    else {
        echo '<div class="welcomemsg">
                 <p>One stop</p>
                 <p>for all Admissions</p>
              </div>';
        
    }
    ?>
   </div>

</main>
<?php
    require 'footer.php';
    
?>
