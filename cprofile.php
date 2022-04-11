<?php
    require 'header.php';
    require 'includes/dbh.inc.php';
?>
<main>
<div class="cuwrapper">
    <?php
       if (isset($_SESSION['clnm'])){
        $cnm = $_SESSION['clnm'];
        $cpno = NULL;
        $sql = "SELECT course,seats,clg_phno FROM college WHERE clg_name = '$cnm';";
        $result = mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);
        echo '<div class="left">
                <h3>'.$cnm.'</h3>
                <h4>Course and available nnumber of seats.</h4>
                <form action="" method="post">
                  <div class="cutab">
                    <div class="curow">';
                    if ( $resultcheck > 0 ) {
                       while ($rid = mysqli_fetch_array($result)) {
                          $cpno = $rid[2];
                          echo '<div class="cucell">
                              <label for="crs1">'.$rid[0].'</label>
                          </div>
                          <div class="cucell">
                              <input type="number" name="crs1" placeholder="'.$rid[1].'">
                          </div><br>';
                        
                       }
                    }
                    echo '</div>
                  </div>
                  <button type="submit">Update</button>
                </form>
        </div>
        <div class="right">
            <h5>Phone no. :'.$cpno.'</h5>';
       }
    ?>
            <form action="includes/updtclg.inc.php" method="post">
                    <label for="cnewphno">Change Phone no. :</label>
                    <input type="number"   name="cnewphno"   class="upinbox" placeholder="Type new phone no."><br>
                    <label for="cnewpwd">Change password</label>
                    <input type="password" name="cnewpwd"  class="upinbox" placeholder="Type Password">
                    <input type="password" name="cnewpwdr" class="upinbox" placeholder="Re-typePassword"><br>
                    <button type="submit" name="cupdate_submit">Update</button>
            </form>
        </div>
</div>
</main>
<?php
    require 'footer.php';
?>