<?php
    require 'header.php';
    require 'includes/dbh.inc.php';
?>
<main>
<div class="suwrapper">
    <?php
      if (isset($_SESSION['stid'])){
        $sid = $_SESSION['stid'];
        $sql = "SELECT st_name,dob,mark,st_phno FROM students WHERE st_id = '$sid';";
        $result = mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);
        if ( $resultcheck > 0 ){
            while ($rid = mysqli_fetch_array($result)) {
                echo '<div class="left">
                        <h3>'.$rid[0].'</h3>
                        <h4>'.$rid[1].'</h4>
                        <h5>Mark:'.$rid[2].'</h5>
                      </div>
                      <div class="right">
                        <h5>Phone no. :'.$rid[3].'</h5>';
            }
        }
      }
    ?>
                        <form action="includes/updtstudent.inc.php" method="post">
                          <label for="snewphno">Change Phone no. :</label>
                          <input type="number"   name="snewphno"   class="upinbox" placeholder="Type new phone no."><br>
                          <label for="snewpwd">Change password</label>
                          <input type="password" name="snewpwd"  class="upinbox" placeholder="Type Password">
                          <input type="password" name="snewpwdr" class="upinbox" placeholder="Re-typePassword"><br>
                          <button type="submit" name="supdate_submit">Update</button>
                        </form>
                      </div> 
</div>
</main>

<?php
    require 'footer.php';
    
?>