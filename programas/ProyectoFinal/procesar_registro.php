<?php
// NOMBRES DE LA CONEXION
$servidor = "localhost";
$user = "root";
$contra = "";
$dbnombre = "gimnasio";

// HACIENDO LA CONEXON
$conn = new mysqli($servidor, $user, $contra, $dbnombre);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // AGARRA LOS DATOS DEL FORMULARIO
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $correo = mysqli_real_escape_string($conn, $_POST['correo']);
    $telefono = mysqli_real_escape_string($conn, $_POST['telefono']);
    $membresia = mysqli_real_escape_string($conn, $_POST['membresia']);

    // Poniendo los datos 
    $sql = "insert into clientes (nombre, correo, telefono, membresia) 
            VALUES ('$nombre', '$correo', '$telefono', '$membresia')";

    if ($conn->query($sql) === TRUE) {
        // pag otra vez
        header("Location: registrar.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>
