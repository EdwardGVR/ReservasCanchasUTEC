<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
    <link href="css/fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet">
    <title>Agregar reserva</title>
</head>
<body>
    <div class="container home">
        <?php include 'menu.php' ?>
        <div class="content">
            <form action="#" id="detallesReserva" class="detalles" method="POST">
                <div class="input-container">
                    <label for="user">Usuario</label>
                    <input id="user" type="text" name="user" placeholder="Usuario" required>
                </div>
                <div class="input-container">
                    <label for="direccion">Direcci&oacute;n:</label>
                    <select name="direccion" id="direccion" required>
                        <option value="null" default disabled selected>-- Seleccione --</option>
                        <option value="1">Polideportivo</option>
                    </select>
                </div>
                <div class="input-container">
                    <label for="tipoCancha">Tipo de cancha:</label>
                    <select name="tipoCancha" id="tipoCancha" required>
                        <option value="null" default disabled selected>-- Seleccione un tipo --</option>
                        <option value="1">Futbol</option>
                        <option value="2">Basquetbol</option>
                    </select>
                </div>
                <div class="input-container">
                    <label for="fecha">Fecha:</label>
                    <input type="date" name="fecha" id="fecha">
                </div>
                <div class="input-container">
                    <label for="horaInicio">Hora de inicio:</label>
                    <select name="horaInicio" id="horaInicio">
                        <option value="null" default disabled>-- Seleccione una hora --</option>
                        <option value="1">6:00am</option>
                        <option value="2">7:00am</option>
                        <option value="3">8:00am</option>
                        <option value="4">9:00am</option>
                        <option value="5">10:00am</option>
                        <option value="6">11:00am</option>
                        <option value="7">12:00pm</option>
                        <option value="8">1:00pm</option>
                        <option value="9">2:00pm</option>
                        <option value="10">3:00pm</option>
                        <option value="11">4:00pm</option>
                        <option value="12">5:00pm</option>
                        <option value="13">6:00pm</option>
                    </select>
                </div>
                <div class="input-container">
                    <label for="horaFin">Hora de fin:</label>
                    <select name="horaFin" id="horaFin" disabled required>
                        <option value="0" default disabled selected>-- Seleccione una hora --</option>
                        <option value="1">6:00am</option>
                        <option value="2">7:00am</option>
                        <option value="3">8:00am</option>
                        <option value="4">9:00am</option>
                        <option value="5">10:00am</option>
                        <option value="6">11:00am</option>
                        <option value="7">12:00pm</option>
                        <option value="8">1:00pm</option>
                        <option value="9">2:00pm</option>
                        <option value="10">3:00pm</option>
                        <option value="11">4:00pm</option>
                        <option value="12">5:00pm</option>
                        <option value="13">6:00pm</option>
                        <option value="14">7:00pm</option>
                    </select>
                </div>

                <div class="input-container">
                    <input type="submit" name="guardar" value="Guardar">
                    <a class="cancelarDetalle" href="consultaReservas.php">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

    <script src="js/functions.js"></script>
</body>
</html>