<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
    <link href="css/fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet">
    <title>Consulta canchas</title>
</head>
<body>
    <div class="container home">
        <?php include 'menu.php' ?>

        <form class="buscador" action="#" method="post">
            <span>Consulta de canchas</span>
            <div class="buscar">
                <div class="por">
                    <label for="tipoCancha">Tipo de cancha:</label>
                    <select name="tipoCancha" id="tipoCancha">
                        <option value="null" default disabled>-- Seleccione un tipo --</option>
                        <option value="1">Futbol</option>
                        <option value="2">Basquetbol</option>
                    </select>
                </div>
                <input type="submit" value="Buscar">
            </div>
        </form>

        <div class="content">
            <div class="results">
                <div class="row cancha headers">
                    <div class="column cancha">Ubicaci&oacute;n</div>
                    <div class="column cancha">Tipo cancha</div>
                    <div class="column cancha">Estado</div>
                    <div class="column detail">Detalles</div>
                </div>

                <a href="#detallesCancha" class="row cancha">
                    <div class="column cancha">Ubicaci&oacute;n</div>
                    <div class="column cancha">Tipo cancha</div>
                    <div class="column cancha">Estado</div>
                    <div class="column detail"><i class="fas fa-eye"></i></div>
                </a>
                <a href="#detallesCancha" class="row cancha">
                    <div class="column cancha">Ubicaci&oacute;n</div>
                    <div class="column cancha">Tipo cancha</div>
                    <div class="column cancha">Estado</div>
                    <div class="column detail"><i class="fas fa-eye"></i></div>
                </a>
            </div>
        </div>

        <!-- <a href="#agregarReserva" class="addIcon">
            <i class="fas fa-plus-circle"></i>
        </a> -->
    </div>
</body>
</html>