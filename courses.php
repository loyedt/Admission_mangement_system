<?php
    require 'header.php';
    require 'includes/dbh.inc.php';
?>

<main>
  <div class="cclist">
    <table>
    <caption>COURSES</caption>
    
      <?php
        $sql = "SELECT DISTINCT course FROM college;";
        $result = mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);
        if ($resultcheck > 0) {
            while ($rid = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td><a href='viewcrs.php?id=".$rid[0]."'>".$rid[0]."</a></td>";
                echo "</tr>";
            }
        }
      ?>

    </table>
  </div>
</main>
<?php
    require 'footer.php';
?>