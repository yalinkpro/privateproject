<?php require_once("config.php"); ?>
<?php require_once( ROOT_PATH ."/themes/header.php"); ?>
    <title>Registration Form</title>
  </head>
  <body>
    <?php require_once( ROOT_PATH ."/themes/navbar.php"); ?>
    <section id="user-section">
      <div class="container">
        <form class="user" action="adduser.php" method="post">
          <h3>Login Form</h3>
          <p>Join as our contributor and earn money</p>
          <input type="text" name="email" placeholder="Email Address" required="required">
          <input type="password" name="password" placeholder="Password" required="required">
          <input type="submit" name="login" value="Login"><br><br>
          <a href="reset-password.php">Forgot Password?</a><br>
          <a href="register.php">Dont have Account?</a>
        </form>
      </div>
    </section>
<?php require_once( ROOT_PATH ."/themes/footer.php"); ?>
