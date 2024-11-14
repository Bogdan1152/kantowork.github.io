<?php
session_start();
include "connect.php";
$rec = mysqli_query($connect,"SELECT * FROM `project` WHERE type = 'Рекомендовані'");
$result = mysqli_fetch_assoc($rec);
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Kantowork</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/styles_main.css">

  <style>
    .navbar-nav .nav-link {
      padding: 0.5rem 1rem;
    }

    .navbar-nav .dropdown-menu {
      padding: 0;
    }

    .navbar-nav .dropdown-item {
      padding: 0.5rem 1rem;
    }
  </style>
</head>
<body>
<header>
  <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="Photo/logo1.png" height="70px" alt="Kantowork Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="nav-link dropdown-toggle" href="#" id="projectsDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <a class="nav-link" href="#contact">Контакти</a>
          </li>
          <li class="nav-item">
            <?php
            if (isset($_SESSION['users'])) {
              echo '<a class="nav-link" src="Photo/user.png" height="15px" href="signin.php">Профіль</a>';
            } else {
              echo '<a class="nav-link" href=login.php ">Вхід</a>';
            }
            ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>


  <section class="hero">
    <div class="container">
      <div class="hero-content text-center">
        <h1>Ласкаво просимо на Kantowork</h1>
        <p>Знайдіть проєкти та працюйте віддалено</p>
        <a href="login.php" class="btn btn-primary cta-button">Розпочніть зараз</a>
      </div>
    </div>
  </section>
  
  
   <section class="featured-projects">
    <div class="container">
      <h2 class="text-center">Рекомендовані проєкти</h2>

      <div class="row">
 
  <?php while($result=mysqli_fetch_assoc($rec)): ?>
        <div class="col-sm-4">
         
          <div class="project" style="height: 300px;" >
                
            <img src="<?php echo $result['img'] ?>" style="height: 110px;" >
            <h3><?php echo $result['title'] ?></h3>
            <p><?php echo $result['description'] ?></p>


            <a class="btn btn-primary cta-button" onclick="Details(<?php echo $result['id_zamov']?>)" style="text-align: center;">Деталі</a>
           
  <script>
    function Details(zamovID){
      window.location.href = " details_project.php?id_zamov=" + zamovID;
    }
  </script>
             
          </div>
        </div>
        <?php endwhile;?>

      </div>
    </div>
  </section>


<section class="how-it-works">
    <div class="container">
      <h2 class="text-center">Як це працює</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="step text-center">
            <img src="Photo/step1.png" alt="Крок 1">
            <h3>Зареєструйтесь</h3>
            <p>Створіть обліковий запис на нашій біржі</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="step text-center">
            <img src="Photo/step2.png" alt="Крок 2">
            <h3>Знайдіть проекти</h3>
            <p>Перегляньте доступні проекти та виберіть той, який вам підходить</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="step text-center">
            <img src="Photo/step3.png" alt="Крок 3">
            <h3>Працюйте віддалено</h3>
            <p>Працюйте на вибраному проекті з будь-якої точки світу</p>
          </div>
        </div>
      </div>
    </div>
  </section>





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