<?php require_once("config.php"); ?>
<?php require_once( ROOT_PATH ."/themes/header.php"); ?>
    <title>Homepage</title>
  </head>
  <body>
    <?php require_once( ROOT_PATH ."/themes/navbar.php"); ?>
    <section id="global-section">
      <div class="container">
        <?php
          require_once("config.php");
          $sql = "SELECT * FROM homepage WHERE title='this is a homepage'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              ?>
               <div class="title">
                 <h2><?php echo $row['title']; ?></h2>
                 <p><?php echo $row['subtitle']; ?></p>
                 <a href="register.php">Join Now</a>
               </div>
              <?php
            }
          }
         ?>
      </div>
    </section>
<?php require_once( ROOT_PATH ."/themes/footer.php"); ?>
