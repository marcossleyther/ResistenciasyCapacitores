<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<!--Contenido para informacion de resistencias -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-6">
                <h1>Resistencias</h1>
                <hr>
                <div class="card" style="width: 25rem;">
                    <img src="img/resistencia.png" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">
                            Una resistencia el??ctrica es toda oposici??n que se da y que encuentra la corriente al pasar por un circuito
                            el??ctrico cerrado, motivo por el que aten??a o frena el flujo de la circulaci??n de la carga el??ctrica o de los electrones implicados.
                        </p>
                        <p class="card-text">
                            La resistencia el??ctrica sirve como un impedimento para el movimiento de los electrones o corriente el??ctrica. En ese sentido, son muchos los posibles
                            usos o aplicaciones como por ejemplo la divisi??n de la corriente, de la tensi??n, la polarizaci??n de circuitos, la regulaci??n de la velocidad en un motor
                            de anillos rozantes e incluso en motores de corriente continua.
                        </p><br>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
<!--Contenido para informacion de capacitores -->
                <h1>Capacitores</h1>
                <hr>
                <div class="card" style="width: 25rem;">
                    <img src="img/Capacitor.jpg" class="card-img-top" height="230" width="5px">
                    <div class="card-body">
                        <p class="card-text">
                            Un capacitor o tambi??n conocido como condensador es un dispositivo capaz de almacenar energ??a a trav??s de campos el??ctricos
                            (uno positivo y uno negativo). Este se clasifica dentro de los componentes pasivos ya que no tiene la capacidad de amplificar o cortar el flujo el??ctrico.
                        </p>
                        <p class="card-text">
                            En su estado natural cada una de las placas internas tiene el mismo numero de electrones. Cuando conectamos una fuente de voltaje una de las placas pierde electrones
                            (siendo esta la terminal positiva), mientras que la otra los gana ( terminal negativa). Este movimiento de electrones se detiene cuando el capacitor alcanza el mismo 
                            voltaje que la fuente de alimentaci??n.
                        </p><br>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>