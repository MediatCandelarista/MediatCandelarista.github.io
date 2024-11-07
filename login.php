<?php
include 'conexion.php'; // Incluir el archivo de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['if0_37015733'];
    $password = $_POST['50gDPk9yBm7R9'];

    // Consulta para verificar el usuario y la contraseña
    $sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Inicio de sesión exitoso
        echo "Bienvenido, " . $username;
    } else {
        // Inicio de sesión fallido
        echo "Usuario o contraseña incorrectos.";
    }
}

$conn->close(); // Cerrar la conexión
?>