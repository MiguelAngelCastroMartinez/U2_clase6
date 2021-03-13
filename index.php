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
        <a class="nav-link text-dark" href="#">PHP inicio</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark" href="./Cadenas.php">Cadenas PHP</a>
    </li>
  </ul>
</nav>

<br>
<div class="container text-center">
  <h1>Semanana 6 trabajando con PHP.</h1>
  <h5>Trabajando con variables</h5>
</div>

<body class="container">
  <?php
  //Declarar variable
  //Variable cadena
    $soycadena="";
    $cadena2="Holaaa";

  //Variable Numerica
    $numeroEntero=1;
    $enteroDecimal=9.9;
    
  //Variable Boleana
    $true= "Verdadero";
    $false= "Falso";

  //Variable Caracter
    $caractervacio= '';
    $caracter= 'A';
  ?>

<h3>Listas de variables</h3>
  <ul>
    <li>Variable cadena vacia: <?php echo $soycadena;?></li>
    <li>Variable cadena llena: <?php echo $cadena2;?></li>
    <li>Variable numero entero: <?php echo $numeroEntero;?></li>
    <li>Variable numero decimal: <?php echo $enteroDecimal;?></li>
    <li>Variable Boleana Verdadero: <?php echo $true;?></li>
    <li>Variable numero decimal: <?php echo $false;?></li>
  </ul>

  <?php
    function myTest($numero) {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
    echo "<p>Variable numero entero inside function is: $numero</p>";
    }
    myTest($numeroEntero);
      // using x outside the function will generate an error
    echo "<p>Variable <strong>x</strong> cambio a <strong>numeroEntero</strong> outside function is: $numeroEntero</p>";
  ?>
  
<br>
<h4>Ejemplo 1 concatenar texto</h4>
  <?php
    echo "This ", "<strong>string</strong>", " was ", "<b>made</b> ", " with multiple parameters.";
  ?>

<br><br>
<h4>Ejemplo 2 concatenar texto y variables</h4>
  <?php
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    $x = 5;
    $y = 5;
    echo "<p>" . $txt1;
    echo "<p>" . $txt1 . "</p>";
    echo "Study PHP at " . $txt2 . " is great!<br>";
    echo $x + $y . " es la suma de dos variables";
  ?>
<br>
  <?php
    //variable arreglo
    $cars = array("Ferrari", "Beetle", "Bmw", "Porsche", "Lamborghini");
    echo "<h3>Variables arreglo</h3>"; 
    echo "<ol><li>".$cars[0].
         "</li><li>".$cars[1].
         "</li><li>".$cars[2].
         "</li><li>".$cars[3].
         "</li><li>".$cars[4].
         "</li><ol>";
  ?>
<br>
<h2>Operadores aritméticos PHP</h2>
  <h3>Coleccion de Ejemplos</h3>
  <table class="table table-bordered">
      <thead>
        <tr>
          <th>Operator</th>
          <th>Name</th>
          <th>Example</th>
          <th>Result</th>
          <th>Show it</th>
        </tr>
      </thead>
    <tbody>
        <tr>
          <td>+</td>
          <td>Suma</td>
          <td>$x + $y</td>
          <td>Suma de $x y $y</td>
          <td>$x = 10; $y = 6; echo $x + $y;</td>
        </tr>
        <tr>
          <td>-</td>
          <td>Resta</td>
          <td>$x - $y</td>
          <td>Resta de $x y $y</td>
          <td>$x = 10; $y = 6; echo $x - $y;</td>
        </tr>
        <tr>
          <td>*</td>
          <td>Multiplicacion</td>
          <td>$x * $y</td>
          <td>Multiplicacion de $x y $y</td>
          <td>$x = 10; $y = 6; echo $x * $y;</td>
        </tr>
        <tr>
          <td>/</td>
          <td>Division</td>
          <td>$x / $y</td>
          <td>División de $x y $y</td>
          <td>$x = 10; $y = 2; echo $x / $y;</td>
        </tr>        <tr>
          <td>%</td>
          <td>Residuo</td>
          <td>$x % $y</td>
          <td>Residuo de $x y $y</td>
          <td>$x = 10; $y = 6; echo $x % $y;</td>
        </tr>        <tr>
          <td>**</td>
          <td>Exponente</td>
          <td>$x * $y</td>
          <td>Exponente de $x y $y</td>
          <td>$x = 3; $y = 2; echo $x ** $y;</td>
        </tr>
        
    </tbody>
    </table>

  </body>
</html>