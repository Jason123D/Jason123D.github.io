<?php
include 'conexionn.php';
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$membresia = $_POST['membresia'];

$sql = "INSERT INTO clientes (nombre, correo, telefono, membresia) VALUES ('$nombre', '$correo', '$telefono', '$membresia')";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
?>
