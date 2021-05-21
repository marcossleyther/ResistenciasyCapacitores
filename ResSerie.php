<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Resistencias en Serie</title>
</head>

<body>
  <!--Barra de navegacion en Header -->
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Calculadora</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="resistencias.php">Resistencias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="capacitores.php">Capacitores</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <?php
  $arr = [];
  $resul = '';
  $suma = 0;
  if (isset($_REQUEST['btn'])) {

  ?>
    <!--Muiestra el resultado de las operaciones -->
    <div class="container-xl mt-5">
      <h1>Resultado de Resistencias en Serie</h1>
      <div class="card mt-3 card-dark bg-dark" style="width: 30rem;">
        <ul class="list-group list-group-flush">
          <?php

          for ($i = 1; $i <= sizeof($_REQUEST['resistencias']); $i++) : ?>
            <li class="list-group-item"><?php echo "Resistencia No. " . $i . ":  " . $_REQUEST['resistencias'][$i] . "<br>"; ?> </li>
          <?php $arr[$i] = $_REQUEST['resistencias'][$i];
            $suma += $_REQUEST['resistencias'][$i];
          endfor;
          echo '<br>' ?>
          <li class="list-group-item"> <?php echo "El resultado de las resistencias en serie es: " . $suma . " Ohmios <br> " . $resul; ?> </li>
        </ul>
      </div>
    </div>
    <?php

    $cadena_equipo = implode(", R" . (1 + 1) . '= ', $arr);
    $calculo = "R1= " . $cadena_equipo;
    $resul = $suma . ' Ohmios';

    //Conexion a base de datos para guardar los valores
    $con = mysqli_connect('localhost', 'root', '', 'electronica') or die('Error en la conexion');
    $sql = "INSERT INTO capacitores (Operacion,Tipo,Calculo,Resultado) values ('Resistencia', 'Serie', '$calculo', '$resul')";
    $resultado = mysqli_query($con, $sql) or die('Error en el registro');
    mysqli_close($con);
    echo '<br><h4>Se guardo el calculo de Resistencia en <a href="historial.php">Historial</a></h4>';
    ?>

  <?php
  } else {
    echo 'Ingrese minimo dos resistencias, luego presione e [IR]';
  }
  ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>