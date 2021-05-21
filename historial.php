<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Proyecto EA</title>
</head>

<body>

    <!--Barra de navegacion en el Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Calculadora</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="resistencias.php">Resistencias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="capacitores.php">Capacitores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="historial.php">Historial de Calculos</a>
                    </li>
                </ul>
            </div>
        </div>
        <form class="d-flex">
            <a class="btn btn-outline-light" href="creditos.php">Creditos</a>
        </form>
    </nav>

    <!--tabla para mostrar los calculos ingresados a BBDD de Capacitores y Resistencias -->
    <br>
    <div class="container-md">
        <h1>Historial de Calculos realizados</h1>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Operacion</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Valores ingresados</th>
                    <th scope="col">Resultado</th>
                </tr>
            </thead>

            <?php //Conexion a Base de Datos
            $con = mysqli_connect('localhost', 'root', '', 'electronica');
            $sql = "select * from capacitores";
            $resultado = mysqli_query($con, $sql) or die('Error en la consulta');
            $i = 1;
            while ($datos = mysqli_fetch_array($resultado)) {
            ?>
                <tbody>
                    <tr>
                        <!--Mostrar datos de la consulta -->
                        <td> <?php echo $i++; ?> </td>
                        <td> <?php echo '' . $datos['Operacion']; ?> </td>
                        <td> <?php echo '' . $datos['Tipo']; ?> </td>
                        <td> <?php echo $datos['Calculo']; ?> </td>
                        <td> <?php echo $datos['Resultado']; ?> </td>
                    </tr>
                <?php } ?>
                </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>