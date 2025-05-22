<?php
$servidor = "sql313.infinityfree.com";
$user = "if0_39004148";
$contra = "tu_contraseña_aquí"; // reemplaza esto con tu contraseña real
$dbnombre = "if0_39004148_gimnasio";

$conn = new mysqli($servidor, $user, $contra, $dbnombre);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM clientes WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: registrar.php?mensaje=Cliente eliminado correctamente");
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "ID no proporcionado";
}

$conn->close();
?>
