<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../CSS/Login.css">

</head>
<body>
    <a href="#" class="back-link">&larr; Volver al inicio</a>
    <div class="login-container">
        <div class="login-header">
            <h2>Iniciar Sesión</h2>
            <p>Accede a tu cuenta para gestionar tus equipos</p>
        </div>
        <form>
            <label for="document">Número de Documento</label>
            <input type="text" id="document" name="document" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" class="login-btn">Iniciar Sesión</button>
        </form>
        <a href="#" class="recordar">¿Olvidaste tu contraseña?</a>
    </div>
    <p class="register-text">¿No tienes una cuenta? <a href="Registro.php" class="Registro">Regístrate</a></p>
</body>
</html>
