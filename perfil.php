<?php
// perfil.php - versión vulnerable

// Imprime directamente el nombre recibido por GET
$nombre = $_GET['nombre'];

echo "<h2>Bienvenido, $nombre</h2>";
?>
