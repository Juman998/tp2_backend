<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tp2</title>
  </head>
  <body>
    <h1>EJERCICIOS DEL TP2</h1>
    <hr>

    <h2>Ejercicio 1</h2>
    <?php
    $n1 = 3;
    if (($n1 > 0)||($n1 == 0)) {
      echo "$n1 es un numero positivo";
    } else {
      echo "$n1 es un numero negativo";
    }
    ?>
    <br><hr>

    <h2>Ejercicio 2</h2>
    <?php
    $n2 = 6;
    if (($n2 > 1)||($n2 < 10)) {
      echo "$n2 es mayor que 1 y menor que 10";
    } else {
      echo "$n2 es menor o igual a 1 o mayor o igual a 10";
    }
    ?>
    <br><hr>

    <h2>Ejercicio 3</h2>
    <?php
    $n3 = -4;
    if ((($n3 > 10)||($n3 < 2))) {
      echo "$n3 es menor que 2 o mayor que 10";
    } else {
      echo "$n3 esta en dentro del rango de 2 a 10";
    }
    ?>
    <br><hr>

    <h2>Ejercicio 4</h2>
    <?php
    $numero1 = 5;
    $numero2 = 43;
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $producto = $numero1 * $numero2;
    $cociente = floor($numero2 / $numero1);
    $resto = $numero2 % $numero1;
    if ($numero1 == $numero2) {
      echo "Los numero ingresados son iguales";
    } elseif ($numero1 > $numero2) {
      echo "La suma es igual a $suma, la resta es igual a $resta";
    } else {
      echo "La multiplicacion es igual a $producto, la division entera es igual a $cociente y el resto de la division es $resto";
    }
    ?>


  </body>
</html>
