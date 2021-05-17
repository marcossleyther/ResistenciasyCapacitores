<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Calcula Capacitores</title>
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
        <form class="d-flex">
            <a class="btn btn-outline-light" href="creditos.php">Creditos</a>
        </form>
    </nav>




    <h1>Calcula Capacitores</h1>

    <div class="btn-group-vertical" role="group" aria-label="Basic radio toggle button group">
        <input type="radio" class="btn-check" name="btnradio" id="serie" autocomplete="off" checked>
        <label class="btn btn-outline-primary" for="serie">Serie</label>

        <input type="radio" class="btn-check" name="btnradio" id="paralelo" autocomplete="off">
        <label class="btn btn-outline-primary" for="paralelo">Paralelo</label>

        <input type="radio" class="btn-check" name="btnradio" id="destrella" autocomplete="off">
        <label class="btn btn-outline-primary" for="destrella">Delta-Estrella</label>

        <input type="radio" class="btn-check" name="btnradio" id="edelta" autocomplete="off">
        <label class="btn btn-outline-primary" for="edelta">Estrella-Delta</label>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>