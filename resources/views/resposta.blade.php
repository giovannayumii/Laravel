<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Lista 3 - ex 5 resposta</title>
  </head>
  
  <body class ="container">
    <h1>Cálculos</h1>

    <?php
      $valor1 = $_POST['valor1'];
      $valor2 = $_POST['valor2'];

      echo "A altura é: $valor1 e o peso é : $valor2";
      echo "<br/>";

      $imc = $valor2 / ($valor1*$valor1);
      
      echo "O IMC é: $imc";
      echo "<br/>";

      if( $imc <= 18.5)
      {
        echo "<br/>";
        echo "Abaixo do peso";
      }
      if( $imc >= 18.6 && $imc <= 24.9)
      {
        echo "<br/>";
        echo "Peso ideal. Parabéns!!!!!";
      }
      if( $imc >= 25 && $imc <= 29.9)
      {
        echo "<br/>";
        echo "Levemente acima do peso";
      }
      if( $imc >= 30 && $imc <= 34.9)
      {
        echo "<br/>";
        echo "Obesidade grau I";
      }
      if( $imc >= 35 && $imc <= 39.9)
      {
        echo "<br/>";
        echo "Obesidade grau II";
      }
      if( $imc > 40)
      {
        echo "<br/>";
        echo "Obesidade III (MORBIDA)";
      }


    ?>