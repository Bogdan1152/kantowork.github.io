<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Kantowork</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/styles_main.css">
    <link rel="stylesheet" href="CSS/styles_client.css">
  
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
          </li>

          <li class="nav-item">
              <a class="nav-link" href="login.php">Вхід</a>
            </li>
        
          </ul>
          <form class="form-inline">
          <input class="form-control mr-sm-2" type="text" placeholder="Пошук">
          <button class="btn_poshuk" type="submit">Пошук</button>
        </form>
      </div>
    </div>
  </nav>
</header>

  <div class="container">
    <div class="login-container">
      <h2 class="login-title">Реєстрація клієнта</h2>
      <form class="login-form" action="Reg/creg.php" method="POST">
        <input type="text" name="name" placeholder="Ім'я" required>
        <input type="email" name="email" placeholder="Пошта" required>
        <input type="password" name="password" placeholder="Пароль" required>
        <button type="submit" name= "submit">Зареєструватись</button>
      </form>
    </div>
  </div>

  
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

