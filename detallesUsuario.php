<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
    <link href="css/fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet">
    <title>Detalles usuario</title>
</head>
<body>
    <div class="container home det">
        <?php include 'menu.php' ?>
        <div class="content">
            <form action="#" id="detallesReserva" class="detalles" method="POST">
                <div class="input-container">
                    <label for="user">Usuario</label>
                    <input id="user" type="text" name="user" placeholder="Usuario">
                </div>
                <div class="input-container">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" type="text" name="nombre" placeholder="Nombre">
                </div>
                <div class="input-container">
                    <label for="tel">Tel&eacute;fono</label>
                    <input id="tel" type="text" name="tel" placeholder="Tel&eacute;fono">
                </div>
                <div class="input-container">
                    <label for="residencia">Residencia</label>
                    <input id="residencia" type="text" name="residencia" placeholder="Residencia">
                </div>
                <div class="input-container">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" placeholder="email@utec.edu.sv">
                </div>
                <div class="input-container">
                    <label for="pass">Password</label>
                    <input id="pass" type="password" name="pass" placeholder="password">
                </div>
                <div class="input-container">
                    <label for="confirmPass">Confirmar password</label>
                    <input id="confirmPass" type="password" name="confirmPass" placeholder="confirmar">
                </div>
                
                <div class="input-container">
                    <label for="rol">Rol</label>
                    <select name="rol" id="rol">
                        <option value="null" default disabled selected>-- Seleccione un rol --</option>
                        <option value="1">Usuario</option>
                        <option value="2">Administrador</option>
                        <option value="2">Gestor</option>
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
                    <input id="guardarBtn" type="submit" name="guardar" value="Guardar">
                    <input id="borrarReserva"  type="submit" name="eliminar" value="Eliminar">
                    <a class="cancelarDetalle" href="consultaReservas.php">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

    <script src="js/functions.js"></script>
</body>
</html>