<?php
    require 'aheader.php';
    require '../includes/dbh.inc.php';
?>
<main>
  <div class="cclist">
    <table>
       <caption>STUDENTS</caption>
       <th>Name</th>
       <th>DOB</th>
       <th>Mark</th>
       <th>Request Status</th>
       <th></th>
     <?php
        $sql = "SELECT st_id,st_name,dob,mark,rqstat FROM students;";
        $result = mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);
        if ($resultcheck > 0) {
            while ($rid = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $rid[1] ."</td>";
                echo "<td>" . $rid[2] ."</td>";
                echo "<td>" . $rid[3] ."</td>";
                echo "<td>" . $rid[4] ."</td>";
                echo '<td class="del"><a href="inc.sdel.php?id1='. $rid[0].'">DELETE</a></td>';
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