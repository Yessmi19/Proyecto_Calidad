<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Login</title>
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
        <p class="pcontainer">Complete sus datos para iniciar sesión en su cuenta</p>
        <form action="login2.php" method="POST">
            <label for="username">Correo electrónico o nombre de usuario</label>
            <input type="text" id="username" name="email" required>
            <label for="password">Contraseña <img src="Imagenes/obligatorio.png" alt="required" class="obligatorio-icon"></label>
            <div class="password-container">
                <input type="password" id="password" name="password" required>
            </div>          
            <button type="submit" name="logins" class="login-button">Iniciar</button>        
            <p class="register-text">¿No tiene una cuenta? <a href="Registro.php" class="register-link" style="text-decoration: none;">Registrar</a></p>
        </form>
    </div>
</body>
</html>