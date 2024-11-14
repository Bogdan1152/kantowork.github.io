<?php
session_start();
include 'connect.php';
$name = $_SESSION['users']['name'];

$rec = mysqli_query($connect, "SELECT * FROM `user` WHERE name = '$name' ");
$result = mysqli_fetch_assoc($rec);

$ord = mysqli_query($connect, "SELECT * FROM `project` WHERE user_name = '$name' ");
$res= mysqli_fetch_assoc($ord);



?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Kantowork</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/styles_main.css">
    
</head>
<body>
  <div class = "batko">
  <header>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
          <?php } ?>
        
          </ul>
          


        </div>
      </div>
    </nav>
  </header>


  
   <br>

    
  <h1 class="profile-title">Профіль клієнта</h1>
  <div class="container1">
  <form class="profile-form" action="bio.php" method="POST" >
    <div class="form-group">
      <label for="photo">Фото:</label>
      <div class="profile-photo">
        <img src="<?php echo $result['photo'] ?>" alt="Фото профілю" id="profilePhoto">
        <div class="edit-photo">
          <label for="photo-input" class="edit-photo-label">Редагувати</label>
          <input type="file" name="photo-input" style="display: none;">
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="name" style="font-size: 30px;"><?php echo $_SESSION['users']['name'] ?></label>
    </div>


    
      <div class="form-group">
        <label for="bio">Автобіографія:</label>
        <textarea name="bio" id="bio" rows="4"><?php echo $result['bio'] ?></textarea>
      </div>
      <div class="form-group">
        <button type="submit" name="submit1" class="btn btn-primary" style = "background-color: orange;" >Зберегти</button>
      </div>
   

  </form>
</div>
<br><br><br>
<h2 align=center> Мої замовлення</h2>
<br>







  <section class="featured-projects">
    <div class="container">

      <div class="row">
 
  <?php while($res=mysqli_fetch_assoc($ord)): ?>
        <div class="col-sm-4">
         
          <div class="project" style="height: 320px;" >
                
            <img src="<?php echo $res['img'] ?>" style="height: 110px;" >
            <h3><?php echo $res['title'] ?></h3>
            <p><?php echo $res['description'] ?></p>

            
            <a class="btn btn-primary cta-button" onclick="Details(<?php echo $res['id_zamov']?>)" style="text-align: center;">Деталі</a>
           
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

  
         

         <script>
    function Details(zamovID){
      window.location.href = " details.php?id_zamov=" + zamovID;
    }
  </script>

    
  


<div class="modal" id="createOrderModal">
  <div class="modal-dialog">
    <div class="modal-content">
       
      <div class="modal-header">
        <h5 class="modal-title">Створити замовлення</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

  
      <div class="modal-body">
        <form action="add1.php" method="POST">
          <div class="form-group">
            <label for="title">Назва:</label>
            <input type="text" name="title">
          </div>
          <div class="form-group">
            <label for="type">Категорія замовлення:</label>
            <select name="type">
              <option value="Розробка">Розробка</option>
              <option value="Вебдизайн">Вебдизайн</option>
              <option value="Фінанси">Фінанси</option>
              <option value="Маркетинг">Маркетинг</option>
            </select>
          </div>
          <div class="form-group">
            <label for="img">Фото:</label>
            <input type="file" name="img">
          </div>
          <div class="form-group">
            <label for="description">Опис:</label>
            <input type="text" name="description">
          </div>
          <div class="form-group">
            <label for="price">Ціна($):</label>
            <input type="text" name="sale">
          </div>
          <div class="form-group">
            <label for="deadline">Срок здачі:</label>
            <input type="date" name="deadline">
          </div>
          <button type="submit" class="btn btn-primary" >Додати</button>
        </form>
      </div>
    </div>
  </div>
</div>

<a type="button" class="btn btn-primary cta mx-auto d-block" data-toggle="modal" data-target="#createOrderModal" style="background-color: orange; width: 200px;">
  Створити замовлення
</a><br><br><br><br>

<form class="text-right">
  <a type="button" href="logout.php" class="btn btn-danger" style="background-color: #FA8072; margin-right: 30px;">Вийти</a><br><br>
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


</body>
</html>

<style>

  .cta {
  display: block;
  margin: 0 auto;
  text-align: center;
}

.text-right {
  text-align: right;
}


    .profile-title {
  
  text-align: center;
  margin-bottom: 20px;
}

.profile-form {
  margin-left: auto;
  margin-right: auto;
  max-width: 500px;
}

.profile-photo {
  position: relative;
  display: inline-block;
}

.profile-photo img {
  height: 200px;
  width: 200px;
  object-fit: cover;
  border-radius: 50%;
  cursor: pointer;
}

.edit-photo {
  position: absolute;
  bottom: 10px;
  right: 10px;
  background-color: rgba(255, 255, 255, 0.8);
  padding: 5px;
  border-radius: 50%;
  cursor: pointer;
  transition: background-color 0.3s;
}

.edit-photo:hover {
  background-color: rgba(255, 255, 255, 0.6);
}

.edit-photo-label {
  font-size: 12px;
  color: #333;
  text-decoration: underline;
}

.form-group label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

.form-group textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

.btn btn-primary {
width: 50px;
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;


  
}

.btn:hover {
  background-color: #45a049;
}






</style>
