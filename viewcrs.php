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
        echo '<caption>Colleges having '.$getid.'</caption>';
        
        $sql = "SELECT clg_name FROM college where course='$getid';";
        $result = mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);
        if ($resultcheck > 0) {
           while ($row = mysqli_fetch_assoc($result)) {
               echo '<tr>';
                echo '<td>'.$row['clg_name'].'</td>';
                if (isset($_SESSION['stnm'])) {
                  echo "<td class='apply'> <a href='includes/crq.inc.php?id1=".$row['clg_name']."&id2=".$getid."'>" .$app. "</td>";
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
