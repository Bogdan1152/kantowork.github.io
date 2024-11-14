
<?php
session_start();

include "../connect.php";
if (!isset($_SESSION['users'])) {
header('Location: ../login.php');
}

$rec = mysqli_query($connect,"SELECT * FROM `project` WHERE type= 'Розробка' ");
  ?>



        

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Kantowork</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../CSS/styles_main.css">
  <link rel="stylesheet" href="../CSS/styles1.css">

  
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="../Photo/logo1.png" height="70px" alt="Kantowork Logo">
        </a>
       
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../index.php">Головна</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pro_nas.php">Про нас</a>
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

if ($_SESSION['users']) {?>


  <li class="nav-item">
               <a class="nav-link" href="../signin.php"> <img src="../Photo/user.png" height="15px" > <?= $_SESSION['users']['name']?></a>
            </li>
          <? }?>
        
          </ul>
          
        </div>
      </div>
    </nav>
  </header>



  </div>
  

  <section class="featured-projects">
    <div class="container">

      <div class="row">
 
  <?php while($result=mysqli_fetch_assoc($rec)): ?>
        <div class="col-sm-4">
         
          <div class="project" style="height: 320px;" >
                
            <img src="<?php echo $result['img'] ?>" style="height: 110px;" >
            <h3><?php echo $result['title'] ?></h3>
            <p><?php echo $result['description'] ?></p>

            
            <a class="btn btn-primary cta-button" onclick="Details(<?php echo $result['id_zamov']?>)" style="text-align: center;">Деталі</a>
           
  <script>
    function Details(projectID){
      window.location.href = "../details_project.php?id_zamov=" + projectID;
    }
  </script>
             
          </div>
        </div>
        <?php endwhile;?>

      </div>
    </div>
  </section>













<script type="text/javascript">
  

  var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>







  
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