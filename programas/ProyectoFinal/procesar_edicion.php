<?php
$servidor = "sql313.infinityfree.com";
$user = "if0_39004148";
$contra = "tu_contraseña_aquí"; // reemplaza esto con tu contraseña real
$dbnombre = "if0_39004148_gimnasio";

$conn = new mysqli($servidor, $user, $contra, $dbnombre);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $membresia = $_POST['membresia'];

    $sql = "update clientes set nombre='$nombre', correo='$correo', telefono='$telefono', membresia='$membresia' where id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: registrar.php?mensaje=Cliente actualizado correctamente");
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
