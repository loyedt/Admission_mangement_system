<?php
    require 'aheader.php';
    require '../includes/dbh.inc.php';
?>
<main>
    <div class="cclist">
    <?php
      $getid = $_GET["id"];
      
      echo '<table>';
        echo '<caption>Courses offered by '.$getid.'</caption>';
        $sql = "SELECT crg_id,course FROM college where clg_name='$getid';";
        $result = mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);
        if ($resultcheck > 0) {
           while ($row = mysqli_fetch_assoc($result)) {
               echo '<tr>';
                echo '<td>'.$row['course'].'</td>';
                echo "<td class='del'><a href='inc.ccdel.php?id1=".$row['crg_id']."'>DELETE</a></td>";
               echo '</tr>';
          }
        }
      echo '</table>';
    ?>
    </div>
</main>
<?php
    require '../footer.php';
    
?>
