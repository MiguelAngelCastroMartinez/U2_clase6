<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Ejemplo</title>
</head>

<nav class="navbar navbar-expand-sm" style="background-color: #9AB2F9;">
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item ">
        <a class="nav-link text-dark" href="#">Cadenas PHP</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark" href="./index.php">PHP inicio</a>
    </li>
  </ul>
</nav>

<br>
<div class="container text-center">
  <h1>Cadenas PHP</h1>
  <h5>Una cadena es una secuencia de caracteres, como "¡Hola mundo!".</h5>
</div>

<body class="container">

  <h3>Funciones de cadena PHP</h3>
  <p>En este capítulo veremos algunas funciones de uso común para manipular cadenas.</p>

  <ul>
    <li><h4>Strlen () - Devuelve la longitud de una cadena.</h4></li>
    <h6>La función PHP strlen () devuelve la longitud de una cadena.</h6>
    <h8><b>Ejemplo:</b> Devuelve la longitud de la cadena. <br><b>"¡Hola Mundo!":</b></h8>
      <?php
        echo strlen("¡Hola Mundo!"); // outputs 11
      ?>

    <br><br>
    <li><h4>Str_word_count () - Contar palabras en una cadena.</h4></li>
    <h6>La función PHP str_word_count () cuenta el número de palabras en una cadena.</h6>
    <h8><b>Ejemplo:</b> Cuenta el número de palabras en la cadena.<br><b>"¡Hola Mundo!":</b></h8>
      <?php
        echo str_word_count("¡Hola Mundo!"); // outputs 2
      ?>

    <br><br>
    <li><h4>Strrev () - Invertir una cadena.</h4></li>
    <h6>La función PHP strrev () invierte una cadena.</h6>
    <h8><b>Ejemplo:</b> Invierta la cadena. <br><b>"Hola Mundo":</b></h8>
      <?php
        echo strrev("Hola Mundo"); // outputs odnuM aloH
      ?>

    <br><br>
    <li><h4>Strpos () - Buscar un texto dentro de una cadena.</h4></li>
    <h6>La función PHP strpos () busca un texto específico dentro de una cadena. Si se encuentra una coincidencia, la función devuelve la posición del carácter de la primera coincidencia. Si no se encuentra ninguna coincidencia, devolverá FALSE.</h6>
    <h8><b>Ejemplo:</b> Busque el texto "mundo" en la cadena. <br><b>"¡Hola Mundo!":</b></h8>
      <?php
        echo strpos("¡Hola Mundo!", "Mundo"); // outputs 7
      ?>
    <br><h8><b>Tip</b>: La primera posición de carácter en una cadena es 0 (no 1).</h8>

    <br><br>
    <li><h4>Str_replace () - Reemplazar texto dentro de una cadena.</h4></li>
    <h6>La función PHP str_replace () reemplaza algunos caracteres con otros caracteres en una cadena.</h6>
    <h8><b>Ejemplo:</b> Reemplaza el texto <b>"Mundo"</b> por <b>"Dolly".</b>: <br><b>"¡Hola Mundo!":</b></h8>
      <?php
        echo str_replace("Mundo", "Dolly", "¡Hola Mundo!");
      ?> 


  </ul>


</body>
</html>