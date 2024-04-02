<?php
//create constants to store non repeating values 

define('LOCALHOST', 'localhos');
define('DB_USERNAME', 'username');
define('DB_PASSWORD', 'password');
define('DB_NAME', 'food-order');


$conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error());//database connection
$db_select = mysqli_select_db($conn, 'DB_NAME') or die(mysqli_error()); //selecting database
?>