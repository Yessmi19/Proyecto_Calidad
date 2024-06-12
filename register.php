<?php
include("con_db.php"); // Incluir el archivo de conexión a la base de datos

if (isset($_POST['registers'])) {
    if (!empty($_POST['nombre']) && !empty($_POST['cedula']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $nombre = mysqli_real_escape_string($conex, $_POST['nombre']);
        $cedula = mysqli_real_escape_string($conex, $_POST['cedula']);
        $correo = mysqli_real_escape_string($conex, $_POST['email']);
        $contraseña = mysqli_real_escape_string($conex, $_POST['password']);

        // Verificar si el correo ya está registrado
        $checkEmail = "SELECT * FROM datos WHERE correo='$correo'";
        $result = mysqli_query($conex, $checkEmail);

        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('¡El correo ya está registrado!'); window.location.href='Registro.php';</script>";
        } else {
            // Preparar la consulta SQL para insertar el nuevo usuario
            $consulta = "INSERT INTO datos (nombre_completo, cedula, correo, contraseña) VALUES ('$nombre', '$cedula', '$correo', '$contraseña')";
            $resultado = mysqli_query($conex, $consulta);

            if ($resultado) {
                // Registro exitoso, establecer el nombre de usuario en la sesión
                $_SESSION['nombre'] = $nombre['nombre'];
                echo "<script>alert('¡Te has registrado correctamente!'); window.location.href='Login.php';</script>";
            } else {
                echo "<script>alert('¡Ups! Ha ocurrido un error al registrar.'); window.location.href='Registro.php';</script>";
            }
        }
    } else {
        echo "<script>alert('¡Por favor complete todos los campos!'); window.location.href='Registro.php';</script>";
    }
}
?>
