<?php
// login_seguro.php - versión corregida

$conn = mysqli_connect("localhost", "root", "", "tienda");

// Usuario y contraseña recibidos
$email = $_POST['email'];
$password = $_POST['password'];

// CONSULTA SEGURA CON PREPARED STATEMENTS
$stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();

$result = $stmt->get_result();

if($result->num_rows > 0){
    echo "Inicio de sesión exitoso";
} else {
    echo "Credenciales inválidas";
}
?>
