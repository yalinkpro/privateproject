<?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "project";
  $conn = new mysqli ($servername, $username, $password, $dbname);
  if($conn->connect_error) {
	die("Connection Failed");
}//echo "Success";
  define('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/project');
 ?>
