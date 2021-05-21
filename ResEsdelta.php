<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Resistencias Estrella Delta</title>
</head>

<body>

  <!--Barra de navegacion en el Header -->
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
  //Variables globales
  $Ra = 0.00;
  $Rb = 0.00;
  $Rc = 0.00;
  $R1 = 0.00;
  $R2 = 0.00;
  $R3 = 0.00;
  $calculo = '';
  $result = '';
  //Valida que los campos no esten vacios y los opera
  if (isset($_REQUEST['btn'])) :
    $Ra = $_REQUEST['Ra'];
    $Rb = $_REQUEST['Rb'];
    $Rc = $_REQUEST['Rc'];

    $calculo = 'Ra= ' . $Ra . ', Rb= ' . $Rb . ', Rc= ' . $Rc;

    $R1 = ($Ra * $Rb + $Rb * $Rc + $Rc * $Ra) / $Ra;
    $R2 = ($Ra * $Rb + $Rb * $Rc + $Rc * $Ra) / $Rb;
    $R3 = ($Ra * $Rb + $Rb * $Rc + $Rc * $Ra) / $Rc;
  ?>

    <div class="container-xl mt-5">
      <h1>Resultado de Resistencias de Estrella a Delta</h1>
      <div class="card mt-3 card-dark bg-dark" style="width: 30rem;">
        <ul class="list-group list-group-flush">

          <!-- Muestra los resultados de la operacion-->
          <li class="list-group-item"><?php echo "Resistencia R1:  " . $R1 . " Ohmios."; ?> </li>
          echo "<br>";
          <li class="list-group-item"><?php echo "Resistencia R2:  " . $R2 . " Ohmios. "; ?> </li>
          echo "<br>";
          <li class="list-group-item"><?php echo "Resistencia R3:  " . $R3 . " Ohmios."; ?> </li>
          <?php
          echo "<br>";

          $result = 'R1= ' . $R1 . ', R2= ' . $R2 . ', R3= ' . $R3 . ' Ohmios';

          ?>
      </div><?php
            //Conexion a base de datos para guardar los valores
            $con = mysqli_connect('localhost', 'root', '', 'electronica') or die('Error en la conexion');
            $sql = "INSERT INTO capacitores (Operacion,Tipo,Calculo,Resultado) values ('Resistencia', 'Estrella Delta', '$calculo', '$result')";
            $resultado = mysqli_query($con, $sql) or die('Error en el registro');
            mysqli_close($con);
            echo '<br><h4>Se guardo el calculo de Resistencia en <a href="historial.php">Historial</a></h4>';

          endif;
            ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>