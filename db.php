<?php
$con = mysqli_connect("localhost", "root", "", "xp");

if ($con === false) {
  echo "Connection failed: " . mysqli_connect_error();
}
?>
