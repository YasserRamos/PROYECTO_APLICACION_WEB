<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: Login.html');
    exit;
}

$DATABASE_HOST = 'localhost:3307';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'chefathome';

$conexion = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_error()) {
    exit('Fallo en la conexión de MySQL:' . mysqli_connect_error());
}

$stmt = $conexion->prepare('SELECT contraseña, email, nombre, apellido
FROM registro WHERE id = ?');
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($contraseña, $email, $nombre, $apellido);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="icon" type="image/svg" href="logophpicono_taza.svg">
    <link rel="stylesheet" href="Login-Color.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
    <title>Perfil</title>
</head>

<body class="loggedin">
    <nav class="navtop">
        <h1>Chef At Home: Perfil</h1>
        <a href="home.php"><button type="button" class="btn btn-primary" disabled>
                Inicio</button>

            <a href="index.php"><button type="button" class="btn btn-primary">
                    Información del Usuario</button>

                <a href="logout.php"><button type="button" class="btn btn-primary">
                        Cerrar Sesión</button>
    </nav>

    <div class="Información del Usuario">
        <p> Esta es tu información registrada. </p>
        <table>
            <tr>
                <td>Usuario:</td>
                <td><?= $nombre, $apellido ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?= $email ?></td>
            </tr>
            <tr>
                <td>Contraseña:</td>
                <td><?= $contraseña ?></td>
            </tr>
            <tr>
                <td>Cargo:</td>
                <td>Cliente</td>
            </tr>
        </table>
    </div>
</body>

</html>