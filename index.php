<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="UTF-8">
  <title>Porsche Mexico</title>
  <link rel="stylesheet" href="styles.css">
  <!-- Favicon (logo miniatura en la pestaña del navegador) -->
  <link rel="icon" href="c:\Users\Lenovo\OneDrive\Escritorio\Pagina Porsche\img\logodorado.png" type="image/jpeg">

  <style>
    /* Estilo para el encabezado */
    header {
      background-color: #000;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    /* Logo en el encabezado */
    .logo img {
  width: 300px;
  height: auto;
}


    /* Navegación */
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

    /* Sección de autos */
    section {
      display: flex;
      flex-wrap: wrap;
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
      margin: 10px;
      opacity: 0; /* Inicialmente oculto para la animación */
      transform: translateY(20px); /* Mueve los autos ligeramente hacia abajo */
      transition: opacity 1s ease-out, transform 1s ease-out;
    }
    .auto img {
      width: 100%;
      margin-bottom: 10px;
      transition: transform 0.3s ease-in-out; /* Transición para el zoom de la imagen */
    }
    .auto:hover {
      transform: translateY(-10px); /* Levanta el auto cuando pasa el mouse */
      transition: transform 0.3s ease-in-out;
    }
    .auto img:hover {
      transform: scale(1.1); /* Aumenta el tamaño de la imagen al pasar el ratón */
    }
    .auto-descripcion {
      margin-top: 10px;
    }
    .auto-precio {
      font-weight: bold;
    }

    /* Animación de entrada para los autos */
    .auto-visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* Efectos de Hover en los botones */
    #search-button:hover, nav a:hover {
      background-color: #004d99;
      transform: scale(1.1);
      transition: all 0.3s ease;
    }

    /* Estilos del formulario de búsqueda */
    #search-container {
      text-align: center;
      margin: 20px 0;
    }
    #search-form {
      margin-bottom: 20px;
    }
    #search-input {
      padding: 10px;
      border: 2px solid #ccc;
      border-radius: 5px;
      width: 200px;
      transition: border-color 0.3s ease;
    }
    #search-input:focus {
      border-color: #0066cc;
    }
    #search-button {
      padding: 10px 20px;
      background-color: #0066cc;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    /* Video de fondo */
    video {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    /* Pie de página */
    footer {
      text-align: center;
      margin-top: 10px;
      color: #fff;
    }

    /* General */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }
  </style>

  <script>
    // Script para animar los autos cuando se cargue la página
    document.addEventListener('DOMContentLoaded', function() {
      const autos = document.querySelectorAll('.auto');
      autos.forEach((auto, index) => {
        setTimeout(() => {
          auto.classList.add('auto-visible'); // Aparece con un efecto suave
        }, index * 300); // Los autos aparecen uno a uno con un pequeño retraso
      });

      // Script para filtrar los autos según la búsqueda
      const searchForm = document.getElementById('search-form');
      const searchInput = document.getElementById('search-input');
      const modelos = document.getElementById('modelos').children;

      searchForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Evita la recarga de la página

        const searchTerm = searchInput.value.toLowerCase();

        // Iterar sobre los autos y mostrar/ocultar según el término de búsqueda
        for (let i = 0; i < modelos.length; i++) {
          const modelo = modelos[i];
          const modeloNombre = modelo.querySelector('h2').textContent.toLowerCase();

          if (modeloNombre.includes(searchTerm)) {
            modelo.style.display = 'block';
          } else {
            modelo.style.display = 'none';
          }
        }
      });
    });
  </script>
</head>

<body>

  <header class="logo">
    <img src="c:\Users\Lenovo\OneDrive\Escritorio\Pagina Porsche\img\logo.jpg" alt="Logotipo Porsche">
    <h1>Rendimiento y elegancia en su máxima expresión</h1>
</header>


<form id="search-form">
  <input type="text" id="search-input" placeholder="Buscar modelo...">
  <button type="submit">Buscar</button>
</form>

<video autoplay muted loop>
    <source src="img/videoPor.mp4" type="video/mp4"> <!-- Ruta del video -->
    Tu navegador no admite la reproducción de video.
</video>


<section id="modelos">

<div class="auto">
<a href="pagInicio.php"><img src="img/porsche-turbo.webp" alt="Porsche Turbo S"></a>
<h2>911 Turbo S</h2>
<p class="auto-descripcion">El superdeportivo de altas prestaciones.</p>
<span class="auto-precio">$5,000,000 MXN</span>
</div>

<div class="auto">
<a href="pagInicio.php"><img src="img/porsche-Taycan.webp" alt="Porsche Turbo 50"></a>
<h2>911 Turbo 50 Years</h2>
<p class="auto-descripcion">El descapotable deportivo y exclusivo.</p>
<span class="auto-precio">$4,998,000 MXN</span>
</div>    

<div class="auto">
<a href="pagInicio.php"><img src="img/porsche-MacanS.webp" alt="Porsche 911 Turbo"></a>
<h2>911 Turbo</h2>
<p class="auto-descripcion">El clásico redefinido.</p>
<span class="auto-precio">$4,000,000 MXN</span>
</div>

<div class="auto">
<a href="pagInicio.php"><img src="img/porsche-911GT3.webp" alt="Porsche 911 GT3"></a>
<h2>911 GT3</h2>
<p class="auto-descripcion">El deportivo de alto rendimiento.</p>
<span class="auto-precio">$3,600,000 MXN</span>
</div>

<div class="auto">
<a href="pagInicio.php"><img src="img/porsche-carrera4GTS.webp" alt="Porsche Carrera 4 GTS"></a>
<h2>911 Carrera 4 GTS</h2>
<p class="auto-descripcion">El deportivo versátil con tracción integral.</p>
<span class="auto-precio">$2,800,000 MXN</span>
</div>

<div class="auto">
<a href="pagInicio.php"><img src="img/porsche-carreraGTS.webp" alt="Porsche Carrera GTS"></a>
<h2>911 Carrera GTS</h2>
<p class="auto-descripcion">El deportivo con carácter y potencia.</p>
<span class="auto-precio">$2,800,000 MXN</span>
</div>

<div class="auto">
<a href="pagInicio.php"><img src="img/porsche-carreraT.webp" alt="Porsche Carrera T"></a>
<h2>911 Carrera T</h2>
<p class="auto-descripcion"> Una variante especial del icónico Porsche 911 Carrera</p>
<span class="auto-precio">$2,500,000 MXN</span>
</div>

<div class="auto">
<a href="pagInicio.php"><img src="img/porsche-Cayenne.webp" alt="Porsche Carrera"></a>
<h2>911 Carrera</h2>
<p class="auto-descripcion">La leyenda en su máxima expresión.</p>
<span class="auto-precio">$2,400,000 MXN</span>
</div>

<div class="auto">
<a href="pagInicio.php"><img src="img/porsche-CayenneCoupe.webp" alt="Porsche Targa 4 GTS"></a>
<h2>911 Targa 4 GTS</h2>
<p class="auto-descripcion">El icónico deportivo con techo retráctil.</p>
<span class="auto-precio">$2,600,000 MXN</span>
</div>

<div class="auto">
<a href="pagInicio.php"><img src="img/porsche-spider RS.webp" alt="Porsche Spyder RS"></a>
<h2>718 Spyder RS</h2>
<p class="auto-descripcion">El hypercar híbrido.</p>
<span class="auto-precio">$2,500,000 MXN</span>
</div>

<div class="auto">
<a href="pagInicio.php"><img src="img/porsche-caymanGT4RS.webp" alt="Porsche 718 Cayman"></a>
<h2>718 Cayman</h2>
<p class="auto-descripcion">Deportividad pura.</p>
<span class="auto-precio">$1,800,000 MXN</span>
</div>

<div class="auto">
<a href="pagInicio.php"><img src="img/porsche-caymanGT4RS.webp" alt="Porsche Cayman GT4 RS"></a>
<h2>718 Cayman GT4 RS</h2>
<p class="auto-descripcion">El coupé de alto rendimiento y diseño deportivo.</p>
<span class="auto-precio">$2,200,000 MXN</span>
</div>

<div class="auto">
<a href="pagInicio.php"><img src="img/porsche-BoxsterGTS4.0.webp" alt="Porsche Boxster GTS 4.0"></a>
<h2>718 Boxster GTS 4.0</h2>
<p class="auto-descripcion">El roadster de alta performance.</p>
<span class="auto-precio">$1,500,000 MXN</span>
</div>

<div class="auto">
<a href="pagInicio.php"><img src="img/porsche-CayenneCoupe.webp" alt="Porsche Cayenne Coupe"></a>
<h2>Cayenne Coupe</h2>
<p class="auto-descripcion">La SUV coupé de lujo.</p>
<span class="auto-precio">$3,200,000 MXN</span>
</div>

<div class="auto">
<a href="pagInicio.php"><img src="img/porsche-Cayenne.webp" alt="Porsche Cayenne"></a>
<h2>Cayenne</h2>
<p class="auto-descripcion">La SUV deportiva por excelencia.</p>
<span class="auto-precio">$3,000,000 MXN</span>
</div>



<div class="auto">
<a href="pagInicio.php"><img src="img/porsche-MacanS.webp" alt="Porsche Macan S"></a>
<h2>Macan S</h2>
<p class="auto-descripcion">La SUV compacta de alto rendimiento.</p>
<span class="auto-precio">$1,600,000 MXN</span>
</div>   
                        
<div class="auto">
<a href="pagInicio.php"><img src="img/porsche-Macan.webp" alt="Porsche Macan"></a>
<h2>Macan</h2>
<p class="auto-descripcion">La SUV compacta de lujo.</p>
<span class="auto-precio">$1,400,000 MXN</span>
</div>        

<div class="auto">
<a href="pagInicio.php"><img src="img/porsche-PanameraTurboEHybrid.webp" alt="Porsche Panamera Turbo E"></a>
<h2>Panamera Turbo E</h2>
<p class="auto-descripcion">La berlina de lujo y altas prestaciones.</p>
<span class="auto-precio">$3,800,000 MXN</span>
</div>

<div class="auto">
<a href="pagInicio.php"><img src="img/porsche-Panamera.webp" alt="Porsche Panamera"></a>
<h2>Panamera</h2>
<p class="auto-descripcion">Elegancia y rendimiento.</p>
<span class="auto-precio">$3,400,000 MXN</span>
</div>

<div class="auto">
  <a href="pagInicio.php"><img src="img/porsche-Taycan.webp" alt="Porsche Taycan"></a>
<h2>Taycan</h2>
<p class="auto-descripcion">El futuro de la movilidad eléctrica.</p>
<span class="auto-precio">$2,000,000 MXN</span>
</div>



                          

</section>

<footer>
<p>2024 © Agencia Porsche. Todos los derechos reservados.</p>
</footer>



</body>
</html>
