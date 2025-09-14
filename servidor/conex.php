<?php
$host = "db";
$user = "user";
$pass = "userpass";
$db   = "mydb";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "✅ Conexión exitosa a MySQL desde PHP con Nginx y mysqli activado 🚀";
?>

