<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Calcula Resistencia</title>
</head>

<body>
    <!--Barra de navegacion en Header -->
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
        <form class="d-flex" method="GET" action="resistencias.php">
            <a class="btn btn-outline-light" href="creditos.php">Creditos</a>
        </form>
    </nav>



    <h1 class="mt-2">Calcula Resistencia</h1>
    <hr>
    <!--Selecciona el tiopo de Resistencia que se desea calcular -->
    <div class="container">
        <div class="btn-group-vertical" role="group" aria-label="Basic radio toggle button group">
            <form action=" " method="">

                <input type="radio" class="btn-check" name="btnOpt" id="serie" autocomplete="off" value="serie">
                <label class="btn btn-outline-dark" for="serie">Serie</label>

                <input type="radio" class="btn-check" name="btnOpt" id="paralelo" autocomplete="off" value="paralelo">
                <label class="btn btn-outline-dark" for="paralelo">Paralelo</label>

                <input type="radio" class="btn-check" name="btnOpt" id="destrella" autocomplete="off" value="destrella">
                <label class="btn btn-outline-dark" for="destrella">Delta-Estrella</label>

                <input type="radio" class="btn-check" name="btnOpt" id="edelta" autocomplete="off" value="edelta">
                <label class="btn btn-outline-dark" for="edelta">Estrella-Delta</label>

                <button type="submit" name="btnTipo" class="btn btn-outline-danger">Seleccionar</button>

            </form>
        </div>
        <br>
        <?php

        //Valida que suceda la accion de Seleccionar, de lo contrario el tipo por defecto sera serie
        if (isset($_REQUEST['btnTipo'])) {
            $tipoRes = $_REQUEST['btnOpt'];

            //Switch para validar tipo de operacion
            switch ($tipoRes) {
                case 'serie': //Caso para calcular en Serie
                    echo '<br><h5>Se calculara en Serie<h5>'; ?>

                    <script>
                        function cantidad() {
                            var n = Number(window.prompt("Cantidad de resistencias en serie", 1))
                            document.cookie = "var=" + n
                        }
                    </script>
                    <a href="" onclick="cantidad()">Cantidad de resistencias a calcular</a> <br>
                    <br>
                    <br>
                    <form action="ResSerie.php" method="POST">
                        <?php for ($i = 1; $i <= $_COOKIE["var"]; $i++) : ?>
                            <input type="text" name="resistencias[<?php echo $i ?>]">

                        <?php endfor; ?>
                        <input type="submit" name="btn" value="Calcular">
                    </form>
                <?php
                    break;

                case 'paralelo': //Caso para calcular en Paralelo
                    echo '<br><h5>Se calculara en Paralelo<h5>'; ?>
                    <scriunction cantidad() {
                          pt>
                        f  var n = Number(window.prompt("Cantidad de resistencias en Para", 1))
                            document.cookie = "var=" + n
                        }
                    </script>
                    <a href="" onclick="cantidad()">Cantidad de resistencias a calcular</a> <br>
                    <br>
                    <br>
                    <form action="ResParalelo.php" method="POST">
                        <?php for ($i = 1; $i <= $_COOKIE["var"]; $i++) : ?>
                            <input type="text" name="resistencias[<?php echo $i ?>]">

                        <?php endfor; ?>
                        <input type="submit" name="btn" value="Calcular">
                    </form>
                <?php
                    break;

                case 'destrella': //Caso para calcular de Delta a Estrella
                    echo '<br><h5>Se calculara Delta a Estrella<h5>'; ?>

                    <form action="ResDestrella.php">

                        <input type="text" name="Ra">
                        <input type="text" name="Rb">
                        <input type="text" name="Rc">
                        <input type="submit" name="btn" value="Calcular">
                    </form>
                <?php
                    break;

                case 'edelta': //Caso para calcular de Estrella a Delta
                    echo '<br>
                    <h5>Se calculara Estrella a Delta<h5>'; ?>
                    <form action="ResEsdelta.php">

                        <input type="text" name="Ra">
                        <input type="text" name="Rb">
                        <input type="text" name="Rc">
                        <input type="submit" name="btn" value="Calcular">
                    </form>

        <?php
                    break;
            }
        } else { //Valor por defecto para iniciar la pagina de resistencias
            echo '<br><h1>Bienvenido Selecciona el tipo de Resistencia ';
            echo '<br><h1>seguido presiona [Seleccionar] <h1>';
        } //Fin else depues de switch
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>