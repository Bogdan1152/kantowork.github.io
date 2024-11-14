
<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
session_start();
require_once 'connect.php';

$title = $_POST['title'];
$img = $_POST['img'];
$description = $_POST['description'];
$sale = $_POST['sale'];
$type = $_POST['type'];
$deadline = $_POST['deadline'];
$name = $_SESSION['users']['name'];


$add = mysqli_query($connect,"INSERT INTO `project` (  `type`, `title`, `user_name`, `description`, `sale`, `img`, `deadline`, `status`) VALUES ('$type', '$title', '$name', '$description', '$sale', '$img', '$deadline','')");

     header('Location: client_profile.php');

?>






