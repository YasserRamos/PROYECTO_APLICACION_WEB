<?php
session_start();

$DATABASE_HOST = 'localhost:3307';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'chefathome';

$conexion = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_error()) {
    exit('Fallo en la conexión de MySQL:' . mysqli_connect_error());
}
if (!isset($_POST['email'], $_POST['password'])) {
    header('Location: ../index.php');
}

if ($stmt = $conexion->prepare('SELECT id, contraseña FROM registro
WHERE email = ?')) {
    $stmt->bind_param('s', $_POST['email']);
    $stmt->execute();
}

$stmt->store_result();
if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $contraseña);
    $stmt->fetch();
}

if ($_POST['password'] === $contraseña) {
    session_regenerate_id();
    $_SESSION['loggedin'] = True;
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['id'] = $id;
    header('Location: ../view/perfil/home.php');
} else {
    header('Location: ../index.php');
}

$stmt->close();
