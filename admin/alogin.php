<?php
    require 'aheader.php';
?>
<main>
  <div class="loginbox">
    <h1> Admin Log in</h1>
    <form action="inc.alogin.php" method="POST">
        <p>Admin ID</p>
        <input class="inbox" type="text" name="admin_id" placeholder="Enter Admin ID">
        <p>Password</p>
        <input class="inbox" type="password" name="admin_pwd" placeholder="Enter password">
        <button class="save" type="submit" name="login_submit">Login</button><br>
    </form>
  </div>
</main>
<?php
    require '../footer.php';
    
?>