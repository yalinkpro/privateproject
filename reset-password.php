<?php require_once("config.php"); ?>
<?php require_once( ROOT_PATH ."/themes/header.php"); ?>
    <title>Registration Form</title>
  </head>
  <body>
    <?php require_once( ROOT_PATH ."/themes/navbar.php"); ?>
    <section id="user-section">
      <div class="container">
        <form class="user" action="adduser.php" method="post">
          <h3>Forgot Password</h3>
          <p>Enter your email address</p>
          <input type="text" name="email" placeholder="Email Address" required="required">
          <input type="submit" name="reset" value="Reset Now">
        </form>
      </div>
    </section>
<?php require_once( ROOT_PATH ."/themes/footer.php"); ?>
