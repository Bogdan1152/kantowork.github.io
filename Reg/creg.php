<?php

    session_start();
    require_once '../connect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = '1';

        mysqli_query($connect, "INSERT INTO `user` (`role`, `user_id`, `name`, `email`, `password`) VALUES ('$role', NULL, '$name', '$email', '$password')");

        $_SESSION['message'] = 'Реєстрація пройшла успішно!';
        header('Location: ../login.php');

    

?>