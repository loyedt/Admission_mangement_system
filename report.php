<?php
    require 'header.php';
?>
<main>
  <div class="report">
     <form action="includes/report.inc.php" method="post">
       <div class="rl">
          <label for="sid">Enter student ID</label>
          <input type="number" name="sid">
       </div>
       <div class="rr">
          <label for="reason">State reason</label>
          <textarea rows = "5" cols = "50" name = "reason"></textarea>
       </div>
       <button type="submit" name="report_submit">Report</button>
     </form>
  </div>
</main>