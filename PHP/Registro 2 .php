<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="../CSS/Registro2.css">
</head>
<body>

<!-- Flecha para volver al inicio -->
<a href="index.html" class="back-arrow">← Volver al inicio</a>

<div class="container">
    <div class="header">
        Registro de Usuario
        <span>Información del equipo</span>
    </div>
    <div class="form-container">
        <form action="Registro.php" method="POST" id="equipo-form">
            <div class="form-group">
                <label>Número de Serial del Equipo</label>
                <input type="text" name="serial_equipo" id="serial_equipo" placeholder="Ingrese el número de serial" required>
            </div>
            <div class="form-group">
                <label>Marca del Equipo</label>
                <input type="text" name="marca_equipo" id="marca_equipo" placeholder="Ingrese la marca del equipo" required>
            </div>
            <div class="buttons">
                <a href="registro.php"><button type="button" class="btn btn-prev">Anterior</button></a>
                <button type="submit" class="btn btn-next">Siguiente</button>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // Obtener referencias a los campos del formulario
    const serialEquipoInput = document.getElementById('serial_equipo');
    const marcaEquipoInput = document.getElementById('marca_equipo');

    // Cargar datos guardados en sessionStorage
    serialEquipoInput.value = sessionStorage.getItem('serial_equipo') || '';
    marcaEquipoInput.value = sessionStorage.getItem('marca_equipo') || '';

    // Guardar datos en sessionStorage cuando el usuario escribe
    serialEquipoInput.addEventListener('input', () => sessionStorage.setItem('serial_equipo', serialEquipoInput.value));
    marcaEquipoInput.addEventListener('input', () => sessionStorage.setItem('marca_equipo', marcaEquipoInput.value));
});
</script>

</body>
</html>