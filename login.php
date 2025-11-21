<?php
// login.php - versión vulnerable

// Conexión a BD
$conn = mysqli_connect("localhost", "root", "", "tienda");

// Usuario y contraseña recibidos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// CONSULTA VULNERABLE (concatenación directa)
$query = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    echo "Inicio de sesión exitoso";
} else {
    echo "Credenciales inválidas";
}
?>
