<?php
    require 'header.php';
    require 'includes/dbh.inc.php';
?>
<main>
    <div class="appliwrapper">
    <?php
        $cnm = $_SESSION['clnm'];
        $ac = 'Accept';
        $dc = 'Decline';
        
        $sql = "SELECT st_id,st_name,st_phno,mark,crg_id FROM students WHERE crg_id IN (SELECT crg_id FROM college WHERE clg_name='$cnm') AND rqstat != 'Approved' AND rqstat != 'Declined';";
        $result = mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);
        if ( $resultcheck > 0 ) {
            echo '<div class="cclist">';
              echo '<table>';
                echo "<tr>";
                   echo "<th>S_ID</th>";
                   echo "<th>Name</th>";
                   echo "<th>Phno</th>";
                   echo "<th>Marks</th>";
                   echo "<th>Course</th>";
                   echo "<th></th>";
                   echo "<th></th>";
                echo "</tr>";
                while ($row = mysqli_fetch_array($result)) {
                  $cid = $row[3];
                  echo '<tr>';
                    echo '<td>'.$row[0].'</td>';
                    echo '<td>'.$row[1].'</td>';
                    echo '<td>'.$row[2].'</td>';
                    echo '<td>'.$row[3].'</td>';
                    $sql2 = "SELECT course FROM college WHERE crg_id='$cid';";
                    $result2 = mysqli_query($conn,$sql2);
                    while ($rc = mysqli_fetch_assoc($result2)) {
                        echo '<td>'.$rc['course'].'</td>';
                    }
                    echo "<td><a class='gr' href='includes/acc.inc.php?sid=".$row[0]."&ccn=".$row[3]."'>".$ac.'</td>';
                    echo "<td><a class='re' href='includes/dec.inc.php?sid=".$row[0]."'>".$dc.'</td>';
                  echo '</tr>';
                }
              echo '</table>';
            echo '</div>';
        }
        else {
          echo '
          <div class="applimsg">
            <p>There are no applicants</p>
          </div>';
        }
        
    ?>
    </div>
</main>
<?php
    require 'footer.php';
?>