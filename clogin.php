<?php
    require 'header.php';
?>
<main>
<div class="loginbox">
        <h1>Log in</h1>
        <form action="includes/clogin.inc.php" method="POST">
            <p>College name</p>
            <input class="inbox" type="text" name="cname" placeholder="Enter collegename">
            <p>Password</p>
            <input class="inbox" type="password" name="cpass" placeholder="Enter password">
            <button class="save" type="submit" name="login_submit">Login</button><br>
            <a href="#">Forgot password</a><br>
            <a href="csignup.php">Don't have an account</a>


        </form>
</div>
</main>

<?php
    require 'footer.php';
    
?>