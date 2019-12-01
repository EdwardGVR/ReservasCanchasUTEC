<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
    <link href="css/fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet">
    <title>Consulta reservas</title>
</head>
<body>
    <div class="container home">
        <?php include 'menu.php' ?>

        <form class="buscador" action="#" method="post">
            <span>Consulta de reservas</span>
            <div class="buscar">
                <div class="por Fecha">
                    <input type="checkbox" name="buscarFecha" id="buscarFecha">
                    <label for="buscarFecha">Por fecha:</label>
                    <input type="date" name="fecha" id="fecha">
                </div>

                <div class="por Usuario">
                    <input type="checkbox" name="buscarUsuario" id="buscarUsuario">
                    <label for="buscarUsuario">Por usuario:</label>
                    <input type="text" name="usuario" id="usuario" placeholder="Usuario">
                </div>

                <input type="submit" value="Buscar">
            </div>
        </form>

        <div class="content">
            <div class="results">
                <div class="row headers">
                    <div class="column number">N&deg;</div>
                    <div class="column">Fecha</div>
                    <div class="column">Horario</div>
                    <div class="column">Usuario</div>
                    <div class="column">Tipo cancha</div>
                    <div class="column">Estado</div>
                    <div class="column detail">Detalles</div>
                </div>
                <a href="detallesReserva.php" class="row headers">
                    <div class="column number">01</div>
                    <div class="column">Fecha</div>
                    <div class="column">Horario</div>
                    <div class="column">Usuario</div>
                    <div class="column">Tipo cancha</div>
                    <div class="column">Estado</div>
                    <div class="column detail"><i class="fas fa-eye"></i></div>
                </a>
                <a href="detallesReserva.php" class="row headers">
                    <div class="column number">02</div>
                    <div class="column">Fecha</div>
                    <div class="column">Horario</div>
                    <div class="column">Usuario</div>
                    <div class="column">Tipo cancha</div>
                    <div class="column">Estado</div>
                    <div class="column detail"><i class="fas fa-eye"></i></div>
                </a>
                <a href="detallesReserva.php" class="row headers">
                    <div class="column number">03</div>
                    <div class="column">Fecha</div>
                    <div class="column">Horario</div>
                    <div class="column">Usuario</div>
                    <div class="column">Tipo cancha</div>
                    <div class="column">Estado</div>
                    <div class="column detail"><i class="fas fa-eye"></i></div>
                </a>
                <a href="detallesReserva.php" class="row headers">
                    <div class="column number">04</div>
                    <div class="column">Fecha</div>
                    <div class="column">Horario</div>
                    <div class="column">Usuario</div>
                    <div class="column">Tipo cancha</div>
                    <div class="column">Estado</div>
                    <div class="column detail"><i class="fas fa-eye"></i></div>
                </a>
            </div>
        </div>

        <a href="agregarReserva.php" class="addIcon">
            <i class="fas fa-plus-circle"></i>
        </a>
    </div>
</body>
</html>