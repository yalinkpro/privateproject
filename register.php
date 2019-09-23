<?php require_once("config.php"); ?>
<?php require_once( ROOT_PATH ."/themes/header.php"); ?>
    <title>Registration Form</title>
  </head>
  <body>
    <?php require_once( ROOT_PATH ."/themes/navbar.php"); ?>
    <section id="user-section">
      <div class="container">
        <form class="user" action="adduser.php" method="post">
          <h3>Registration Form</h3>
          <p>Join as our contributor and earn money</p>
          <input type="text" name="username" placeholder="Full Name" required="required">
          <input type="text" name="email" placeholder="Email Address" required="required">
          <input type="password" name="password" placeholder="Password" required="required">
          <input type="password" name="cpassword" placeholder="Retype Password" required="required">
          <input type="submit" name="register" value="Register"><br><br>
          <a href="login.php">Have an Account?</a>
        </form>
      </div>
    </section>
<?php require_once( ROOT_PATH ."/themes/footer.php"); ?>
