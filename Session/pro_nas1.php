<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Kantowork</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../CSS/styles.css">
  <link rel="stylesheet" href="../CSS/styles1.css">

  
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../index.php">
          <img src="../Photo/logo1.png" height="70px" alt="Kantowork Logo">
        </a>
       
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../index.php">Головна</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Про нас</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="projectsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Проєкти
              </a>
              <div class="dropdown-menu" aria-labelledby="projectsDropdown">
                <a class="dropdown-item" href="#">Розробка</a>
                <a class="dropdown-item" href="#">Вебдизайн</a>
                <a class="dropdown-item" href="#">Маркетинг</a>
                <a class="dropdown-item" href="#">Фінанси</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Контакти</a>
            </li>

        
<?php
session_start();

if ($_SESSION['users']) {?>


  <li class="nav-item">
       <a class="nav-link" href="../login.php"> <img src="../Photo/user.png" height="15px" > <?= $_SESSION['users']['name']?></a>
            </li>
          <? }?>
          </ul>
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="text" placeholder="Пошук">
            <button class="btn_poshuk" type="submit">Пошук</button>
          </form>


        </div>
      </div>
    </nav>
  </header>


<div class ="text">
<h2> Kantowork</h2>
  <div class="tse">
  Kantowork - це інноваційна фріланс біржа, яка з'єднує замовників та фрілансерів з усього світу. Наша платформа створена для того, щоб надати можливість людям з різними професійними навичками знаходити проекти та працювати віддалено.

</div>
<br>
<h3>Основні особливості Kantowork:</h3>
<br>

<div class="feature">
  <h4>Широкий спектр проектів:</h4>
  <p>Наша біржа пропонує різноманітні проекти в різних галузях, таких як розробка програмного забезпечення, веб-дизайн, маркетинг, фінанси, писання контенту та багато інших. Це дозволяє фрілансерам знаходити проекти, які найкраще відповідають їхнім навичкам та інтересам.</p>
</div>

<div class="feature">
  <h4>Гнучкість робочого часу:</h4>
  <p>Наша платформа дає змогу фрілансерам працювати з будь-якого місця і в будь-який зручний для них час. Ви можете встановлювати гнучкий графік роботи, виходячи зі своїх потреб і обставин.</p>
</div>
<div class="feature">
  <h4>Взаємодія та співпраця:</h4>
  <p>Кантоворк надає зручні інструменти для комунікації та співпраці між замовниками та фрілансерами. Ви можете обговорювати деталі проектів, обмінюватися файлами та отримувати зворотний зв'язок, щоб забезпечити успішне виконання проектів.</p>
</div>
<div class="feature">
  <h4>Рейтинг та відгуки:</h4>
  <p>Наша платформа забезпечує систему рейтингу та відгуків, яка допомагає замовникам оцінювати якість роботи фрілансерів. Це створює довіру і допомагає вибрати найкращих фахівців для проектів.</p>
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