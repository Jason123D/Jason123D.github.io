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
    $sql = "select * from clientes WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $cliente = $result->fetch_assoc();
    } else {
        die("Cliente no encontrado");
    }
} else {
    die("ID no proporcionado");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente - SayaGYM</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center text-warning mb-4">Editar Cliente</h1>

        
        <form action="procesar_edicion.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">
            <div class="form-group">
                <label for="nombre">Nombre Completo</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $cliente['nombre']; ?>" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo Electrónico</label>
                <input type="email" name="correo" id="correo" class="form-control" value="<?php echo $cliente['correo']; ?>" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo $cliente['telefono']; ?>" required>
            </div>
            <div class="form-group">
                <label for="membresia">Tipo de Membresía</label>
                <select name="membresia" id="membresia" class="form-control">
                    <option value="Básica" <?php echo ($cliente['membresia'] == 'Básica') ? 'selected' : ''; ?>>Básica</option>
                    <option value="Premium" <?php echo ($cliente['membresia'] == 'Premium') ? 'selected' : ''; ?>>Premium</option>
                    <option value="VIP" <?php echo ($cliente['membresia'] == 'VIP') ? 'selected' : ''; ?>>VIP</option>
                </select>
            </div>
            <button type="submit" class="btn btn-warning btn-block">Guardar Cambios</button>
        </form>
    </div>
</body>
</html>
