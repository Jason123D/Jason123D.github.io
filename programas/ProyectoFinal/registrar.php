<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Clientes - SayaGYM</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php" style="color: yellow;">SayaGYM</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="servicios.php">Servicios</a></li>
                <li class="nav-item"><a class="nav-link" href="membresias.php">Membresías</a></li>
                <li class="nav-item"><a class="nav-link active" href="registrar.php">Registrar</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center text-warning mb-4">Gestión de Clientes</h1>


 
        <div class="card shadow mb-5">
            <div class="card-body">



                <form action="procesar_registro.php" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre Completo</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ej: Jason De la Paz" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo Electrónico</label>
                        <input type="email" name="correo" id="correo" class="form-control" placeholder="Ej: 100588112@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Ej: 809-123-4567" required>
                    </div>
                    <div class="form-group">
                        <label for="membresia">Tipo de Membresía</label>
                        <select name="membresia" id="membresia" class="form-control">
                            <option value="Básica">Básica</option>
                            <option value="Premium">Premium</option>
                            <option value="VIP">VIP</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-warning btn-block">Registrar Cliente</button>
                </form>
            </div>
        </div>
        
        <!-- LA TABLA  -->
        <h2 class="text-center text-warning mb-4">Lista de Clientes Registrados</h2>
        <div class="table-responsive">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Membresía</th>
                        <th>Fecha de Registro</th>
                        <th>Acciones</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                 
                    $servidor = "localhost";
                    $user = "root";
                    $contra = "";
                    $dbnombre = "gimnasio";

                 
                    $conn = new mysqli($servidor, $user, $contra, $dbnombre);

                    // VIENDO SI LA CONEXION SE HIZO
                    if ($conn->connect_error) {
                        die("Conexión fallida: " . $conn->connect_error);
                    }

    
                    $sql = "select * FROM clientes";
                    $result = $conn->query($sql);

                    //PROBANDO SI ESTA VACIO
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . $row["id"] . "</td>
                                    <td>" . $row["nombre"] . "</td>
                                    <td>" . $row["correo"] . "</td>
                                    <td>" . $row["telefono"] . "</td>
                                    <td>" . $row["membresia"] . "</td>
                                    <td>" . $row["fecha_registro"] . "</td>
                                    
                                      <td>
                        <a href='editar.php?id={$row['id']}' class='btn btn-sm btn-warning'>Editar</a>
                        <a href='eliminar.php?id={$row['id']}' class='btn btn-sm btn-danger' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este cliente?\");'>Eliminar</a>
                    </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No hay clientes registrados</td></tr>";
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="bg-secondary text-white text-center py-3">
        <p>&copy; 2024 JASON VICENTE DE LA PAZ BAEZ</p>
        <p>&copy; #100588112 </p>

    </footer>
</body>
</html>
