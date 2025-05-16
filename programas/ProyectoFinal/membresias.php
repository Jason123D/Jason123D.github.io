<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membresías - SayaGYM</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php" style="color: yellow;">SayaGYM</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="servicios.php">Servicios</a></li>
                <li class="nav-item"><a class="nav-link active" href="membresias.php">Membresías</a></li>
                <li class="nav-item"><a class="nav-link" href="registrar.php">Registrar</a></li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid bg-dark text-white" style="background-image: url('/imagenes/Dragon-Ball-Sparking-Zero.jpg'); 
        background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed; padding: 100px 0;">
        <div class="overlay" style="background-color: rgba(0, 0, 0, 0.5); padding: 50px 0;">
            <h1 class="text-center display-4 font-weight-bold">Nuestras Membresías</h1>
            <p class="text-center lead">Elige la opción que mejor se adapte a tus objetivos</p>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
          


            <div class="col-md-4">
                <div class="card text-center border-warning mb-4">
                    <div class="card-header bg-warning text-dark">
                        <h3>Básica</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">$1000/mes</h4>
                        <p class="card-text">Acceso al gimnasio en horario regular.</p>
                        <p class="card-text">Asistencia de entrenadores.</p>
                        <a href="registrar.php" class="btn btn-warning">Contratar</a>
                    </div>
                </div>
            </div>

           
            
            <div class="col-md-4">
                <div class="card text-center border-warning mb-4">
                    <div class="card-header bg-warning text-dark">
                        <h3>Premium</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">$2,000/mes</h4>
                        <p class="card-text">Acceso ilimitado al gimnasio.</p>
                        <p class="card-text">Clases grupales gratuitas.</p>
                        <a href="registrar.php" class="btn btn-warning">Contratar</a>
                    </div>
                </div>
            </div>

           
            <div class="col-md-4">
                <div class="card text-center border-warning mb-4">
                    <div class="card-header bg-warning text-dark">
                        <h3>VIP</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">$3000/mes</h4>
                        <p class="card-text">Acceso 24/7 al gimnasio.</p>
                        <p class="card-text">Entrenamiento personalizado y asesoría nutricional.</p>
                        <a href="registrar.php" class="btn btn-warning">Contratar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-secondary text-white text-center py-3">
        <p>&copy; 2024 JASON VICENTE DE LA PAZ BAEZ</p>
        <p>&copy; #100588112 </p>

    </footer>
</body>
</html>
