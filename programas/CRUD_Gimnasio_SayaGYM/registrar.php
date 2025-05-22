<h2>Registrar Cliente - SayaGYM</h2>
<form method="POST" action="procesar_registro.php">
    <label>Nombre: <input type="text" name="nombre" required></label><br>
    <label>Correo: <input type="email" name="correo" required></label><br>
    <label>Teléfono: <input type="text" name="telefono" required></label><br>
    <label>Membresía:
        <select name="membresia">
            <option value="Básica">Básica</option>
            <option value="Premium">Premium</option>
            <option value="VIP">VIP</option>
        </select>
    </label><br>
    <button type="submit">Guardar</button>
</form>
