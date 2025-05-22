<?php
$servidor = "sql313.infinityfree.com";
$user = "if0_39004148";
$contra = "e5aBjl2FcLCocB"; // Reemplazar
$dbnombre = "if0_39004148_gimnasio";

$conn = new mysqli($servidor, $user, $contra, $dbnombre);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
