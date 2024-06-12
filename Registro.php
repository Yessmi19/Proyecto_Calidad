<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="headerprin">
        <img src="Imagenes/Logoo.png" alt="Logo">
    </div>
    <div class="login-container">
        <h1>Bienvenido a N<span class="highlight">Day</span></h1>
        <p class="pcontainer">Complete sus datos para registrar su cuenta</p>
        <form method="POST" action="register.php">
            <label for="nombre">Nombre y apellido</label>
            <input type="text" id="nombre" name="nombre" required> 
            <label for="cedula">Cédula</label>
            <input type="text" id="cedula" name="cedula" required>             
            <label for="username">Correo electrónico o nombre de usuario</label>
            <input type="text" id="email" placeholder="ejemplo@gmail.com" name="email" required>    
            <label for="password">Contraseña</label>
            <div class="password-container">
                <input type="password" id="passwordR" name="password" required pattern="(?=.*[A-Z])(?=.*[-])(?=.*[!@#$%^&*()_+{}\[\]:\";,.]).{1,10}" 
                title="Máximo 10 caracteres de longitud y contenga al menos una letra mayúscula, un guion (-) y un carácter especial">
            </div>
            <button type="submit" name="registers" class="login-button">Registrar</button>
            <p class="register-text">¿Ya estás registrado? <a href="Login.php" class="register-link">Iniciar sesión</a></p>
        </form> 
    </div>
</body>
</html>