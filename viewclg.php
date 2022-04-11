<?php
    require 'header.php';
    require 'includes/dbh.inc.php';
?>

<main>
  <div class="cclist">

    <?php
      $getid = $_GET["id"];
      $app = "Apply";
      
      echo '<table>';
        echo '<caption>Courses offered by '.$getid.'</caption>';
        $sql = "SELECT course FROM college where clg_name='$getid';";
        $result = mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);
        if ($resultcheck > 0) {
           while ($row = mysqli_fetch_assoc($result)) {
               echo '<tr>';
                echo '<td>'.$row['course'].'</td>';
                if (isset($_SESSION['stnm'])) {
                  echo "<td class='apply'> <a href='includes/crq.inc.php?id1=".$getid."&id2=".$row['course']."'>" .$app. "</td>";
                }
               echo '</tr>';
          }
        }
      echo '</table>';
    ?>
    
  </div>
</main>
<?php
    require 'footer.php';
?>