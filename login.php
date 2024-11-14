<?php
session_start();

if ($_SESSION['users']) {
    header('Location: signin.php');
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Kantowork</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/styles_main.css">
    <link rel="stylesheet" href="CSS/styles2.css">
  
</head>
<body>
  <header>
  <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="Photo/logo1.png" height="70px" alt="Kantowork Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Головна</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pro_nas.php">Про нас</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="projectsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Проєкти
            </a>
            <div class="dropdown-menu" aria-labelledby="projectsDropdown">
              <a class="dropdown-item" href="Project/develop.php">Розробка</a>
              <a class="dropdown-item" href="#">Вебдизайн</a>
              <a class="dropdown-item" href="#">Маркетинг</a>
              <a class="dropdown-item" href="#">Фінанси</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#contact">Контакти</a>

          <li class="nav-item">
              <a class="nav-link" id="loginButton" href="login.php">Вхід</a>
              <a id="profileLink" href="profile.php"><i id="userIcon" class="fas fa-user"></i></a>
            </li>
        
          </ul>
          
      </div>
    </div>
  </nav>
</header>

  <div class="container">
    <div class="login-container">
    
      <h2 class="login-title">Вхід</h2>
        <form class="login-form" action="signin.php" method="POST">
        <input type="email" name="email" placeholder="Пошта" required>
        <input type="password" name="password" placeholder="Пароль" required>
        <button type="submit" name="submit">Увійти</button>
      </form>
      <div class="signup-link">
        Немає акаунту? <a href="reg.php">Зареєструйтесь!</a>
         <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
      </div>
    </div>
    
<style>
        .msg {
display: flex;
justify-content: center;
    width: 365px;
    border: 2px solid #ffa908;
    border-radius: 3px;
    margin-top: 10px;
    margin-bottom: 0px;
    padding: 10px;
    text-align: center;
    font-weight: bold;
}
</style>


  </div>

  
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<script>
    
// Отримайте посилання на елементи кнопки, іконки та посилання на профіль
const loginButton = document.getElementById("loginButton");
const userIcon = document.getElementById("userIcon");
const profileLink = document.getElementById("profileLink");

// Перевірте, чи користувач вже увійшов
if ($_SESSION['users']) {
  // Змініть видимість кнопки та іконки
  loginButton.style.display = "none";
  userIcon.style.display = "inline-block";
  
  // Змініть URL посилання на профіль або персональний кабінет
  profileLink.href = "profile.php";
}


  </script>

