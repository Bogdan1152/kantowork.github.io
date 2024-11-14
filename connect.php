<?php
$connect = mysqli_connect("localhost", "root", "", "birzha");
if($connect==false)
  die("ERROR_D: " . mysqli_connect_error($connect));
?>    