<?php
include("conexion.php");
$getmysql = new mysqlconex();
$getconex = $getmysql->conex();

if (isset($_POST["registrar"])) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $contraseña = $_POST["contraseña"];

    $query = "INSERT INTO registro (nombre, apellido, email, direccion, telefono, contraseña) VALUES (?, ?, ?, ?, ?, ?)";
    echo $query;
    $sentencia = mysqli_prepare($getconex, $query);
    mysqli_stmt_bind_param($sentencia, "ssssis", $nombre, $apellido, $email, $direccion, $telefono, $contraseña);
    mysqli_stmt_execute($sentencia);
    $afectado = mysqli_stmt_affected_rows($sentencia);
    if ($afectado == 1) {
        echo "<script> alert('[$nombre] [$apellido], se registró correctamente'); location.href='../../index.php'; </script>";
    } else {
        echo "<script> alert('error al registrarse'); location.href='../../registrarse/index.php'; </script>";
    }
    mysqli_stmt_close($sentencia);
    mysqli_close($getconex);
}

    //$stmt = $dbn->prepare("SELECT * FROM registro WHERE email = $_POST['email']");
    //$stmt ->execute();
    //$usuarios = $stmt->fetchAll(PDO::FETCH_OBJ);

    //$delete = "DELETE FROM registro WHERE email = '$email'";
