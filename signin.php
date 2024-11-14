
<?php
session_start();

    include 'connect.php';


    $email=$_POST['email'];
$password=$_POST['password'];





if (!isset($_SESSION['users'])) {
  




    $check_user = mysqli_query($connect, "SELECT * FROM `user` WHERE email = '$email' AND password = '$password' and role = '0'");
    if (mysqli_num_rows($check_user) > 0) {

        $users = mysqli_fetch_assoc($check_user);
        $_SESSION['users'] = [
           "user_id" => $users['user_id'],
            "role" => $users['role'],
            "name" => $users['name'],
            "photo"=> $users['photo'],
            "email" => $users['email'],
            "password" => $users['password']
        ];

header('Location: profile.php');

    }
$check_user = mysqli_query($connect, "SELECT * FROM `user` WHERE email = '$email' AND password = '$password' and role = '1'");
    if (mysqli_num_rows($check_user) > 0) {

        $users = mysqli_fetch_assoc($check_user);
        $_SESSION['users'] = [
           "user_id" => $users['user_id'],
            "role" => $users['role'],
            "name" => $users['name'],
            "photo"=> $users['photo'],
            "email" => $users['email'],
            "password" => $users['password']
        ];

header('Location: client_profile.php');

    } 
}




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