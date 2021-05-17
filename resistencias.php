<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Calcula Resistencia</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">Calculadora</a>
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
        <form class="d-flex" method="GET" action="resistencias.php">
            <a class="btn btn-outline-light" href="creditos.html">Creditos</a>
        </form>
    </nav>



    <h1 class="mt-2">Calcula Resistencia</h1>
    <hr>
    <div class="container">
        <div class="btn-group-vertical" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="serie" autocomplete="off" checked>
            <label class="btn btn-outline-dark" for="serie">Serie</label>

            <input type="radio" class="btn-check" name="btnradio" id="paralelo" autocomplete="off">
            <label class="btn btn-outline-dark" for="paralelo">Paralelo</label>

            <input type="radio" class="btn-check" name="btnradio" id="destrella" autocomplete="off">
            <label class="btn btn-outline-dark" for="destrella">Delta-Estrella</label>

            <input type="radio" class="btn-check" name="btnradio" id="edelta" autocomplete="off">
            <label class="btn btn-outline-dark" for="edelta">Estrella-Delta</label>
        </div>
        <br>




        <div class="input-group mt-5">
            <br>
            <form action="resistencias.php" method="post">
                <h5>Cuantas Resistencias Deseas Calcular:</h4>
                    <input type="number" name="CantResistencias" id="CantResistencias">
                    <button type="submit" class="btn btn-outline-secondary">IR</button>
            </form>
        </div>

        <?php
        $resistencias = $_POST['CantResistencias'];
        if ($resistencias < 2) {
            echo 'Ingrese el numero de resistencias, luego presione e [IR]';
        } else {
            echo "<br>" . 'Ingrese los valores para: ' . "<br>";
            for ($i = 0; $i < $resistencias; $i++) {
        ?>
                <br>

                <form action="index.php" method="get">
                    R <?php echo '' . $i + 1; ?>
                    <input type="number" name="res" id="res">

                <?php }   ?>
                <button type="submit" class="btn btn-outline-dark">Calcular</button>
                </form>
            <?php } ?>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>