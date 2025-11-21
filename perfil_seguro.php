<?php
// perfil_seguro.php - versión corregida

$nombre = $_GET['nombre'] ?? "";

// Escapar HTML para evitar ejecución de scripts
$nombre = htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8');

echo "<h2>Bienvenido, $nombre</h2>";
?>
