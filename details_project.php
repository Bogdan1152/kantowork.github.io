<?php
session_start();

include "connect.php";


$recs = mysqli_query($connect, "SELECT * FROM project");

$result = mysqli_fetch_assoc($recs);

$projectID = $_GET['id_zamov'];

$rec = "SELECT * FROM project WHERE id_zamov = $projectID";

$result = mysqli_query($connect, $rec);

$recom = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Kantowork</title>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/styles_main.css">
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


  <br>



  <section class="featured-projects">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card" style="width:auto; height: auto;">
            <img src="<?php echo $recom['img'] ?>" class="card-img-top" alt="Project Image">
            <div class="card-body">
              <h5 class="card-title"><?php echo $recom['title'] ?></h5>
              <p class="card-text">Замовник: <?php echo $recom['user_name'] ?></p>
              <p class="card-text">Ціна: <?php echo $recom['sale'] ?>$</p>
              <p class="card-text">Опис: <?php echo $recom['description'] ?></p>
              <p class="card-text">Крайній срок: <?php echo $recom['deadline'] ?></p>

<?php
if (isset($_SESSION['users'])) {

    echo '<a href="#" class="btn btn-primary" style= "background-color: orange;">Прийняти замовлення</a>';
} else {

    echo '<a href="login.php" class="btn btn-primary" style= "background-color: orange;" >Прийняти замовлення</a>';
}
?>

             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer style="margin-top: 100px;">
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

<?php
mysqli_close($connect);
?>
