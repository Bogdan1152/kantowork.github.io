<?php
session_start();
include "connect.php";
if (!isset($_SESSION['users'])) {
  header('Location: login.php');
}



?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Профіль</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/styles_main.css">
  <link rel="stylesheet" href="CSS/styles_profile.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="Photo/logo1.png" height="70px" alt="Kantowork Logo">
        </a>
        
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
                <a class="dropdown-item" href="Project/Develop.php">Розробка</a>
                <a class="dropdown-item" href="#">Вебдизайн</a>
                <a class="dropdown-item" href="#">Маркетинг</a>
                <a class="dropdown-item" href="#">Фінанси</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Контакти</a>
            </li>
              <li class="nav-item">
        
<?php


if ($_SESSION['users']) {?>



               <a class="nav-link" href="#"> <img src="Photo/user.png" height="15px" > <?= $_SESSION['users']['name']?></a>
            </li>
          <? }?>
        
          </ul>
          


        </div>
      </div>
    </nav>
  </header>


  
   
    </header>

  <br><br><br>
  
  <h1>Особистий кабінет</h1>

  <section class="profile-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="profile-sidebar">
            <!-- Зображення профілю -->
            <label for="name"><?= $_SESSION['users']['name'] ?></label>
    </div>
        </div>
        <div class="col-md-8">
          <div class="profile-content">
            <h3>Прийняті замовлення</h3>
            <?php
            // Перевірка наявності прийнятих замовлень
            if (mysqli_num_rows($ordersResult) > 0) {
              // Виведення прийнятих замовлень
              while ($order = mysqli_fetch_assoc($ordersResult)) {
                echo '<div class="card">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $order['name'] . '</h5>';
                echo '<p class="card-text">' . $order['description'] . '</p>';
                echo '<a href="order.php?id_zamov=' . $order['id_zamov'] . '" class="btn btn-primary" style="background-color: orange;">Детальніше</a>';
                echo '</div>';
                echo '</div>';
              }
            } else {
              echo '<p>Немає прийнятих замовлень</p>';
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>





<form>
        <a href="logout.php" class="logout">Вихід</a><br><br><br><br><br><br><br><br><br><br><br><br>
  
    </form>












  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="contactinfo">
            <ul class="nav-pills">
              <script>
  document.querySelector('a[href="#contact"]').addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('contact').scrollIntoView({ behavior: 'smooth' });
  });
</script>
              <a id="contact"></a>
              Контактна інформація
              <li><i class="ka-phone"></i> Номер телефону: +380 957 226 742</li>
              <li><i class="ka-email"></i> Електронна пошта: kantowork@gmail.com</li>
            </ul>
          </div>
        </div>
      </div>
      <p class="text-center">© 2023 Фріланс Біржа Kantowork. Усі права захищені.</p>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<style>
  .fa-user{
    background-image: url(Photo/user.png);
  }
  </style>
  <script>
    
// Отримайте посилання на елементи кнопки, іконки та посилання на профіль
const loginButton = document.getElementById("loginButton");
const userIcon = document.getElementById("userIcon");
const profileLink = document.getElementById("profileLink");

// Перевірте, чи користувач вже увійшов
if (userLoggedIn) {
  // Змініть видимість кнопки та іконки
  loginButton.style.display = "none";
  userIcon.style.display = "inline-block";
  
  // Змініть URL посилання на профіль або персональний кабінет
  profileLink.href = "profile.html";
}


  </script>
