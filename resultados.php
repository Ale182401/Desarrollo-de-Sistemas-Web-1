<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Resultados de Datos!</title>
    <script src="https://kit.fontawesome.com/a71707a89a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="dive2">
    <h1>¡Resultados!</h1>
    <center>
      <img src="img/img1.jpg" alt="Snoopy">
    </center>
    <h2>¡Bien Hecho!</h2>

    <p><strong>Nombre:</strong> <?php 
    echo $_POST['Name']; ?></p>
    <p><strong>Edad:</strong> <?php 
    echo $_POST['Age']; ?></p>
    <p><strong>Ciudad:</strong> <?php 
    echo $_POST['City']; ?></p>
    <p><strong>Fecha de Nacimiento:</strong> <?php 
    echo $_POST['Birthday']; ?></p>
    <p><strong>Pasatiempo:</strong> <?php 
    echo $_POST['Hobby']; ?></p>
  </div>
  <div id= "popUpOverlay"></div>
  <div id="popUpBox">
    <div id="box">
      <i class="fas fa-question-circle fa-5x"></i>
      <h1>¿Volver a ingresar los datos?</h1>
      <div id="closeModal"></div>
    </div>
  </div>
  <button onclick="window.location.href='index.php';" class="btn">¡Volver a ingresar!</button>
  <script src="js/app.js"></script>
  </div>
</body>
</html>
</body>
</html>