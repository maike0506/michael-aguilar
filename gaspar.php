<?php
$servidor = "localhost"; 
$usuario = "root"; 
$clave = ""; 
$base_de_datos = "michael";


$conn = new mysqli($servidor, $usuario, $clave, $base_de_datos);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];


$sql = "INSERT INTO usuarios (nombre, email, telefono) VALUES (?, ?, ?)";
        
if ($stmt === false) {
    die("Error en la preparación de la consulta: " . $conn->error);
}
#
$stmt->bind_param("sss", $nombre, $email, $telefono);

if ($stmt->execute()) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
