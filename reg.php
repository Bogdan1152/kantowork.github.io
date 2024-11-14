<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


  <style>
    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      display: flex;
      align-items: center;
      justify-content: center;
    
    }

    .modal {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      text-align: center;
    }

    .modal img {
      width: 50px;
      height: 50px;
      margin: 20px;
    }

    .modal p {
      margin-bottom: 20px;
    }

    .modal button {
      padding: 10px 20px;
      background-color: orange;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
  </style>

<body>
  

  <div class="overlay" id="overlay">
    <div class="modal">


      <p>Виберіть ким ви хочете зареєструватись:</p>
      <button onclick="selectOption('freelancer')">
        <img src="Photo/freelancer.png" alt="Freelancer">
        Фрілансер
      </button>
      <button onclick="selectOption('client')">
        <img src="Photo/client.png" alt="Client">
        Клієнт   
      </button>
    </div>
  </div>

  <script>
    function selectOption(option) {
      if (option === 'freelancer') {
        window.location.href = 'freelancer.php';
      } else if (option === 'client') {
        window.location.href = 'client.php';
      }
      
    }
  </script>
</body>
</html>