<?php
    require 'header.php';
?>
<main>
<div class="signupbox">
        <h1>Sign up</h1>
        <form action="includes/signup.inc.php" method="POST">
            <p>Name</p>
            <input class="inbox" type="text" name="st_name" placeholder="Enter name">
            <p>Date of birth</p>
            <input class="inbox" type="date" name="dob" >
            <p>Mark</p>
            <input class="inbox" type="number" name="mark" placeholder="Enter CGPA(out of 10)">
            <p>Phone no</p>
            <input class="inbox" type="number" name="st_phno" placeholder="Enter phoneno">
            <p>Enter passsword</p>
            <input class="inbox" type="password" name="st_pass" placeholder="password">
            <p>Confirm password</p>
            <input class="inbox" type="password" name="st_passr" placeholder="Repeat password">
            <button class="save" type="submit" name="signup_submit">Signup</button><br>
            <a href="login.php">Already have an account</a>
        </form>
</div>
</main>

<?php
    require 'footer.php';
    
?>