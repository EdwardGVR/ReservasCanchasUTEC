<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
    <link href="css/fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet">
    <title>Detalles cancha</title>
</head>
<body>
    <div class="container home">
        <?php include 'menu.php' ?>
        <div class="content">
            <form action="#" id="detallesReserva" class="detalles" method="POST">
                <div class="input-container">
                    <label for="ubicacion">Ubicaci&oacute;n:</label>
                    <select name="ubicacion" id="ubicacion">
                        <option value="null" default disabled>-- Seleccione --</option>
                        <option value="1">Polideportivo</option>
                    </select>
                </div>
                <div class="input-container">
                    <label for="tipoCancha">Tipo de cancha:</label>
                    <select name="tipoCancha" id="tipoCancha">
                        <option value="null" default disabled selected>-- Seleccione un tipo --</option>
                        <option value="1">Futbol</option>
                        <option value="2">Basquetbol</option>
                    </select>
                </div>
                <div class="input-container">
                    <label for="estado">Estado</label>
                    <select name="estado" id="estado">
                        <option value="null" default disabled selected>-- Seleccione estado --</option>
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                    </select>
                </div>
                <div class="input-container">
                    <label for="informacion">Informaci&oacute;n del estado:</label>
                    <input id="informacion" type="text" name="informacion" placeholder="informaci&oacute;n del estado">
                </div>
                <div class="input-container">
                    <input type="submit" name="guardar" value="Guardar">
                    <input id="borrarReserva"  type="submit" name="eliminar" value="Eliminar">
                    <a class="cancelarDetalle" href="consultaReservas.php">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

    <script src="js/functions.js"></script>
</body>
</html>