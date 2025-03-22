<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIVP - Sistema de Validación de Portátiles</title>
    <link rel="stylesheet" href="../CSS/Inicio.css">
   
</head>
<body>
    <header>
        <div class="logo">
            <img src="../IMAGENES/L.sena.png" alt="SENA Logo">
            <span>S I V P</span>
        </div>
        <nav>
            <a href="Sesion.php">Iniciar Sesión</a>
            <a href="Registro.php">Registrarse</a>
        </nav>
    </header>
    <main>
        <section class="hero">
            <h1>Sistema de Validación de Portátiles</h1>
            <p>Registra y controla el ingreso de equipos al centro de formación del SENA de manera eficiente y segura.</p>
        </section>
        <section class="cards">
            <div class="card">
                <div class="icon">+</div>
                <h2>Registro de Usuarios</h2>
                <p>Regístrate como aprendiz, instructor, administrador o personal de seguridad.</p>
                <a href="Registro.php"> <button>Registrarse</button></a>
            </div>
            <div class="card">
                <div class="icon">→</div>
                <h2>Iniciar Sesión</h2>
                <p>Accede a tu cuenta para gestionar tus equipos registrados.</p>
              <a href="Sesion.php"> <button>Iniciar Sesión</button></a>
            </div>
        </section>
        <section class="steps">
            <h2>¿Cómo Funciona?</h2>
            <div class="step-container">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Regístrate</h3>
                    <p>Crea tu cuenta con tus datos personales y los de tu equipo.</p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Obtén tu QR</h3>
                    <p>Genera un código QR único para cada equipo registrado.</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Ingresa al Centro</h3>
                    <p>Muestra tu QR al personal de seguridad para validar tu ingreso.</p>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
