<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura de Datos</title>
    <script src="https://kit.fontawesome.com/a71707a89a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <div class="dive">
     <h1>Captura de Datos Personales</h1>
     <br>

     <h2>Ingresa los datos que se te piden:</h2>
     <br>

     <p>Mi primera encuesta</p>
     <hr>
     
     <form action="resultados.php" method="post">

        <label for="Name">Nombre:</label>
        <input type="text" id="Name" name="Name" placeholder="Ingresa tu nombre" required><hr>

        <label for="Age">Edad:</label>
        <input type="number" id="Age" name="Age" placeholder="Ingresa tu edad" required><hr>

        <label for="City">Ciudad:</label>
        <input type="text" id="City" name="City" placeholder="Ingresa tu ciudad" required><hr>

        <label for="Birthday">Fecha de Nacimiento:</label>
        <input type="date" id="Birthday" name="Birthday" required><hr>

        <label for="Hobby">Pasatiempo:</label>
        <input type="text" id="Hobby" name="Hobby" placeholder="Ingresa tu pasatiempo" required><hr>

        <button type="submit">¡Ingresamos los Datos!</button>
     </form>
   </div>
</body>
</html>