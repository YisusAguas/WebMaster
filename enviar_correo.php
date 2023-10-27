<?php
// Conexión a la base de datos (ajusta las credenciales según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$database = "enviar";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Recoger datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$comentario = $_POST['comentario'];

// Insertar datos en la base de datos
$sql = "INSERT INTO datos (nombre, email, telefono, comentario) VALUES ('$nombre', '$email', '$telefono', '$comentario')";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente.";
} else {
    echo "Error al insertar datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
