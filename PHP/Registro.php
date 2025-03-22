<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Registro.css">
</head>
<body>

<!-- Flecha para volver al inicio -->
<a href="Login.php" class="back-arrow">← Volver al inicio</a>

<!-- Encabezado fuera del container -->
<div class="header">
    Registro de Usuario
    <p class="subheader">Información Personal</p>
</div>

<!-- Contenedor del Formulario de Registro -->
<div class="container">
    <form action="Registro 2 .php" method="POST" id="registro-form">
        <label>Tipo de Usuario:</label>
        <div class="radio-group">
            <input type="radio" name="tipo" value="aprendiz" required> Aprendiz
            <input type="radio" name="tipo" value="instructor" required> Instructor
            <input type="radio" name="tipo" value="administrador" required> Administrador
            <input type="radio" name="tipo" value="seguridad" required> Seguridad
            <input type="radio" name="tipo" value="civil" required> Civil
        </div>

        <label>Nombre Completo</label>
        <input type="text" name="nombre" id="nombre" required>

        <label>Tipo de Documento</label>
        <select name="tipo_documento" id="tipo_documento" required>
            <option value="cc">Cédula de Ciudadanía</option>
            <option value="ti">Tarjeta de Identidad</option>
        </select>

        <label>Número de Documento</label>
        <input type="text" name="numero_documento" id="numero_documento" required>

        <label>Correo Electrónico</label>
        <input type="email" name="correo" id="correo" required>

        <label>Número de Teléfono</label>
        <input type="text" name="telefono" id="telefono" required>

        <div id="ficha-formacion" class="hidden">
            <label>Ficha de Formación</label>
            <input type="text" name="ficha_formacion" id="ficha_formacion">
        </div>

        <div id="extra-seguridad" class="hidden">
            <label>Código de Empresa</label>
            <input type="text" name="codigo_empresa" id="codigo_empresa">

            <label>Turno</label>
            <select name="turno" id="turno">
                <option value="dia">Día</option>
                <option value="tarde">Tarde</option>
                <option value="noche">Noche</option>
            </select>

            <label>Dependencia Asignada</label>
            <select name="dependencia" id="dependencia">
                <option value="porteria">Portería</option>
                <option value="granja">Granja</option>
                <option value="piso1">Piso 1</option>
                <option value="piso2">Piso 2</option>
                <option value="piso3">Piso 3</option>
                <option value="area_admin">Área Administrativa</option>
            </select>
        </div>

        <label>Contraseña</label>
        <input type="password" name="contrasena" id="contrasena" required>

        <label>Confirmar Contraseña</label>
        <input type="password" name="confirmar_contrasena" id="confirmar_contrasena" required>

        <div class="buttons">
            <button type="submit" class="btn btn-prev" name="finalizar_sin_equipo">Finalizar Registro sin Equipo</button>
            <button type="submit" class="btn btn-next">Siguiente</button>
        </div>
    </form>
</div>

<script src="../JS/MantenerDatos.js"></script> <!-- Referencia al archivo JS externo -->

</body>
</html>
