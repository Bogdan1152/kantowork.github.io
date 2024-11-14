
<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
session_start();
require_once 'connect.php';

$user_id = $_SESSION['users']['user_id'];
$bio = $_POST['bio'];



  
  
      $update = mysqli_query($connect,"UPDATE user SET bio = '$bio' WHERE user_id ='$user_id'");



    if (isset($_SESSION['users'])) {




$role=$_SESSION['users']['role'];

    $check_user1 = mysqli_query($connect, "SELECT * FROM `user` WHERE  '$role' = '0'");
    if (mysqli_num_rows($check_user1) > 0) {


header('Location: profile.php');

    }
    $check_user1 = mysqli_query($connect, "SELECT * FROM `user` WHERE  '$role' = '1'");
    if (mysqli_num_rows($check_user1) > 0) {

header('Location: client_profile.php');

    } 
  }





?>