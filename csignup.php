<?php
    require 'header.php';
?>
<main>
<div class="csignupbox">
        <h1>REGISTER</h1>
        <form action="includes/csignup.inc.php" method="POST">
           <p>College name</p>
           <input class="inbox" type="text" name="cname" placeholder="Enter college name">
           <p>Phone no</p>
           <input class="inbox" type="number" name="cphno" placeholder="Enter phoneno">
           <p>Courses and available seats</p>
           <div class="cntab">
              <div class="cnrow">
                <div class="cncell">
                   <input class="inbox" type="text" name="crs1" placeholder="course name">
                   <input class="inbox" type="text" name="crs2" placeholder="course name">
                   <input class="inbox" type="text" name="crs3" placeholder="course name">
                   <input class="inbox" type="text" name="crs4" placeholder="course name">
                   <input class="inbox" type="text" name="crs5" placeholder="course name">
                   <input class="inbox" type="text" name="crs6" placeholder="course name">
                   <input class="inbox" type="text" name="crs7" placeholder="course name">
                </div>
                <div class="cncell">
                   <input class="inbox" type="number" name="seat1" placeholder="No of seats">
                   <input class="inbox" type="number" name="seat2" placeholder="No of seats">
                   <input class="inbox" type="number" name="seat3" placeholder="No of seats">
                   <input class="inbox" type="number" name="seat4" placeholder="No of seats">
                   <input class="inbox" type="number" name="seat5" placeholder="No of seats">
                   <input class="inbox" type="number" name="seat6" placeholder="No of seats">
                   <input class="inbox" type="number" name="seat7" placeholder="No of seats">
                </div>
              </div>
           </div>
           <p>Enter passsword</p>
           <input class="inbox" type="password" name="cpass" placeholder="password">
           <p>Confirm password</p>
           <input class="inbox" type="password" name="cpassr" placeholder="Repeat password">
           <button class="save"type="submit" name="signup_submit">Signup</button><br>
           <a href="clogin.php">Already have an account</a>
        </form>
</div>
</main>

<?php
    require 'footer.php';
    
?>