<?php
include 'conexion.php';
$resultado = $conn->query("SELECT * FROM clientes");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clientes - SayaGYM</title>
</head>
<body>
    <h1>Clientes Registrados</h1>
    <a href="registrar.php">Registrar Nuevo Cliente</a>
    <table border="1">
        <tr><th>ID</th><th>Nombre</th><th>Correo</th><th>Teléfono</th><th>Membresía</th><th>Acciones</th></tr>
        <?php while($row = $resultado->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nombre'] ?></td>
            <td><?= $row['correo'] ?></td>
            <td><?= $row['telefono'] ?></td>
            <td><?= $row['membresia'] ?></td>
            <td>
                <a href="editar.php?id=<?= $row['id'] ?>">Editar</a> |
                <a href="eliminar.php?id=<?= $row['id'] ?>">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
