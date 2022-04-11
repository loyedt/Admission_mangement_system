<?php
    require 'aheader.php';
    require '../includes/dbh.inc.php';
?>
<main>
  <div class="arep">
    <?php
        $sql = "SELECT (SELECT COUNT(DISTINCT clg_name) FROM college) AS college_count , (SELECT COUNT(*) FROM students) AS student_count , (SELECT COUNT(DISTINCT course) FROM college) AS course_count;";
        $result = mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);
        if ($resultcheck > 0) {
            while ($rid = mysqli_fetch_array($result)) {
              echo "<div class='abox'>
              <h2>Colleges</h2><br>
              <h3>" . $rid[0] ."</h3>
             </div>
             <div class='abox'>
              <h2>Students</h2><br>
              <h3>" . $rid[1] ."</h3>
             </div>
             <div class='abox'>
              <h2>Courses</h2><br>
              <h3>" . $rid[2] ."</h3>
             </div>";
            }
          }
    ?>
    
    
  </div>
</main>
<?php
    require '../footer.php';
    
?>



