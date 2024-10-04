<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['gmail'];
    $password = $_POST['password'];

    if (!empty($nombre) && !empty($email) && !empty($password)) {
        echo "<h2>¡Registro exitoso!</h2>";
        echo "<p>Nombre: " . htmlspecialchars($nombre) . "</p>";
        echo "<p>Correo Electrónico: " . htmlspecialchars($email) . "</p>";
    } else {
        echo "<h2>Error en el registro</h2>";
        echo "<p>Por favor, rellena todos los campos.</p>";
    }
} else {
    echo "<h2>Error en el formulario</h2>";
    echo "<p>Acceso no autorizado.</p>";
}