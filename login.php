<?php
    require 'header.php';
?>
<main>
<div class="loginbox">
        <h1>Log in</h1>
        <form action="includes/login.inc.php" method="POST">
            <p>User name</p>
            <input class="inbox" type="text" name="st_name" placeholder="Enter username">
            <p>Password</p>
            <input class="inbox" type="password" name="st_pass" placeholder="Enter password">
            <button class="save" type="submit" name="login_submit">Login</button><br>
            <a href="#">Forgot password</a><br>
            <a href="signup.php">Don't have an account</a>
        </form>
</div>
</main>

<?php
    require 'footer.php';
    
?>