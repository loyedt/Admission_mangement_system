<?php
    require 'aheader.php';
    require '../includes/dbh.inc.php';
?>
<main>
     <?php
        $rp = 'rp';
        $sql = "SELECT * FROM report;";
        $result = mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);
        if ($resultcheck > 0) {
            echo '<div class="cclist">
              <table>
                <th>S_id</th>
                <th>College</th>
                <th>Reason</th>
                <th></th>';
            while ($rid = mysqli_fetch_array($result)) {
                echo "<tr>";
                  echo "<td>".$rid[0]."</td>";
                  echo "<td>".$rid[1]."</td>";
                  echo "<td>".$rid[2]."</td>";
                  echo "<td class='del'><a href='inc.sdel.php?id1=".$rid[0]."&fl=".$rp."'>DELETE</a></td>";
                echo "</tr>";
            }
              echo '</table>
            </div>';
        }
        else {
          echo '<div class="shome">
                   <p>There are no reports.</p>
                </div>';
        }
     ?>
</main>
<?php
    require '../footer.php';
    
?>