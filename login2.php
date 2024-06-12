<?php
include("con_db.php"); // Assuming this file contains your database connection

if (isset($_POST['logins'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = mysqli_real_escape_string($conex, $_POST['email']);
        $password = mysqli_real_escape_string($conex, $_POST['password']);

        $correo = trim($email);
        $contraseña = trim($password);

        // Verify if the user exists by email or name
        $query = "SELECT * FROM datos WHERE (correo='$correo' OR nombre_completo='$correo') AND contraseña='$contraseña'";
        $result = mysqli_query($conex, $query);

        if (mysqli_num_rows($result) > 0) {
            // Correct credentials, redirect to Home.html
            echo "<script>window.location.href='Home.php';</script>";
        } else {
            // Incorrect password or email not registered
            echo "<script>alert('¡Credenciales incorrectas!'); window.history.back();</script>";
        }
    } else {
        // Empty fields
        echo "<script>alert('¡Por favor complete los campos!'); window.history.back();</script>";
    }
}
?>
