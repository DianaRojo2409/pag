<?php
$server = "localhost";
$user = "root";
$password = "";
$bd = "carros";

$con = mysqli_connect ($server, $user, $password, $bd);
  if ($con){
  

   
   echo "<h1>ok</h1>";
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $nombre= $_POST ['nombre'];
  $correo= $_POST ['correo'];
  $modelo= $_POST ['modelo'];

  $sql = "INSERT INTO `carro`(`nombre`, `correo`, `modelo`) VALUES ('$nombre','$correo','$modelo')";

  if (mysqli_query($con, $sql)) {
    echo "Nuevo registro creado";
  } else {
    echo "Error en: " . $sql . "<br>" . mysqli_error($conn);
  }

 }
?>

<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="UTF-8">
  <title>Contacto</title>
  <link rel="stylesheet" href="styles.css">
  <!-- Favicon (logo miniatura en la pestaña del navegador) -->
  <link rel="icon" href="c:\Users\Lenovo\OneDrive\Escritorio\Pagina Porsche\img\logodorado.png" type="image/jpeg">


<style>
     body {
  background-image: url('img/porsche-normal.jpg'); /* Cambia 'ruta/de/tu/imagen.jpg' por la ruta de tu imagen */
  background-size: cover; /* Ajusta la imagen para cubrir todo el fondo */
}


  /* Estilos para el encabezado */
  header {
    background-color: #000;
    color: #fff;
    padding: 20px;
    text-align: center;
  }
  .logo img {
  width: 300px;
  height: auto;
  }
  nav ul {
    list-style: none;
    padding: 0;
  }
  nav li {
    display: inline;
    margin-right: 10px;
  }
  nav a {
    text-decoration: none;
    color: #fff;
  }
  section {
  display: flex;
  flex-wrap: wrap; /* Permite que los autos se ajusten automáticamente en varias filas */
  justify-content: center;
  margin-top: 20px;
}
.auto {
  background-color: #fff;
  color: #000000;
  border: 1px solid #ccc;
  padding: 20px;
  text-align: center;
  width: 200px;
  margin: 10px; /* Espacio entre los autos */
}
  /* Estilos específicos para el formulario de contacto */
  .contacto {
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px;
    max-width: 600px;
    margin: 0 auto;
  }
  .contacto h2 {
    text-align: center;
    margin-bottom: 20px;
  }
  .contacto form {
    display: flex;
    flex-direction: column;
  }
  .contacto form label {
    margin-bottom: 10px;
    font-weight: bold;
  }
  .contacto form input,
  .contacto form select {
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
  }
  .contacto form button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
  }
  .contacto form button:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>

<header class="logo">
  <img src="img/logo.jpg" alt="Logotipo Porsche">
</header>

<div class="contacto">
  <h2>Contacto</h2>
  <form action="" method="POST">
    <label for="nombre">nombre</label>
    <input type="text" id="nombre" name="nombre" required>
    
    <label for="correo">correo</label>
    <input type="email" id="correo" name="correo" required>
    
    <label for="modelo">modelo</label>
    <select id="modelo" name="modelo" required>
      <option value="">Selecciona un modelo</option>
      <option value="911 Turbo">911 Turbo</option>
      <option value="Cayenne">Cayenne</option>
      <option value="Panamera">Panamera</option>
      <option value="Panamera">Macan</option>
      <option value="Panamera">718 Cayman</option>
      <option value="Panamera">Taycan</option>
      <option value="Panamera">911 Carrera</option>
      <option value="Panamera">Boxster</option>
      <option value="Panamera">911 GT3</option>
      <option value="Panamera">Cayman GT4 RS</option>
      <option value="Panamera">911 Targa</option>
      <option value="Panamera">911 Carrera 4S</option>
      <option value="Panamera">911 Turbo S</option>
      <option value="Panamera">Cayenne Coupe</option>
      <option value="Panamera">911 Carrera GTS</option>
      <option value="Panamera">718 Spyder</option>
      <option value="Panamera">911 Carrera T</option>
      <option value="Panamera">Macan Turbo S</option>
      <option value="Panamera">Panamera Turbo E</option>
      <option value="Panamera">911 edición 50 aniversario de Porsche Design</option>
    </select>
    
    <button type="submit">Enviar</button>
  </form>
</div>

 <!-- Botón que redirige a la página principal -->
 <a href="pagInicio.html">
  <button>Ir a la Página Principal</button>
</a>
<footer>
    <p>2024 © Agencia Porsche. Todos los derechos reservados.</p>
    </footer>

</body>
</html>

