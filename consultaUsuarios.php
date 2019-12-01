<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
    <link href="css/fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet">
    <title>Consulta usuarios</title>
</head>
<body>
    <div class="container home">
        <?php include 'menu.php' ?>

        <form class="buscador" action="#" method="post">
            <span>Consulta de usuarios</span>
            <div class="buscar">
                <div class="por Usuario">
                    <label for="buscarUsuario">Buscar usuario:</label>
                    <input type="text" name="buscarUsuario" id="buscarUsuario" placeholder="Usuario">
                </div>

                <input type="submit" value="Buscar">
            </div>
        </form>

        <div class="content">
            <div class="results">
                <div class="row headers">
                    <div class="column">Carn&eacute;</div>
                    <div class="column">Nombre</div>
                    <div class="column">Tel&eacute;fono</div>
                    <div class="column">Email</div>
                    <div class="column">Rol</div>
                    <div class="column detail">Detalles</div>
                </div>
                
                <a href="detallesUsuario.php" class="row">
                    <div class="column">Carn&eacute;</div>
                    <div class="column">Nombre</div>
                    <div class="column">Tel&eacute;fono</div>
                    <div class="column">Email</div>
                    <div class="column">Rol</div>
                    <div class="column detail"><i class="fas fa-eye"></i></div>
                </a>
                <a href="detallesUsuario.php" class="row">
                    <div class="column">Carn&eacute;</div>
                    <div class="column">Nombre</div>
                    <div class="column">Tel&eacute;fono</div>
                    <div class="column">Email</div>
                    <div class="column">Rol</div>
                    <div class="column detail"><i class="fas fa-eye"></i></div>
                </a>
                <a href="detallesUsuario.php" class="row">
                    <div class="column">Carn&eacute;</div>
                    <div class="column">Nombre</div>
                    <div class="column">Tel&eacute;fono</div>
                    <div class="column">Email</div>
                    <div class="column">Rol</div>
                    <div class="column detail"><i class="fas fa-eye"></i></div>
                </a>
                <a href="detallesUsuario.php" class="row">
                    <div class="column">Carn&eacute;</div>
                    <div class="column">Nombre</div>
                    <div class="column">Tel&eacute;fono</div>
                    <div class="column">Email</div>
                    <div class="column">Rol</div>
                    <div class="column detail"><i class="fas fa-eye"></i></div>
                </a>
            </div>
        </div>

        <a href="#agregarUsuario" class="addIcon">
            <i class="fas fa-plus-circle"></i>
        </a>
    </div>
</body>
</html>