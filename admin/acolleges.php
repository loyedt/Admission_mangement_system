<?php
    require 'aheader.php';
    require '../includes/dbh.inc.php';
?>
<main>
  <div class="cclist">
    <table>
       <caption>COLLEGES</caption>
    
     <?php
        $sql = "SELECT DISTINCT clg_name FROM college;";
        $result = mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);
        if ($resultcheck > 0) {
            while ($rid = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td><a href='aviewclg.php?id=".$rid[0]."'>" . $rid[0] ."</a></td>";
                echo "<td class='del'><a href='inc.cdel.php?id1=".$rid[0]."'>DELETE</a></td>";
                echo "</tr>";
            }
        }
     ?>
    </table>
  </div>
</main>
<?php
    require '../footer.php';
    
?>