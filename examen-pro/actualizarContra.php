<?php
session_start(); // Inicia la sesión

// Verifica si el usuario está autenticado
if (!isset($_SESSION['email'])) {
    echo json_encode(['status' => 'error', 'message' => 'Debes estar autenticado para cambiar tu contraseña.']);
    exit;
}

// Incluye el archivo de configuración de la base de datos y la conexión
include_once 'dbConnection.php';

// Recuperar los datos del formulario
$newPassword = $_POST['new_password'];
$confirmPassword = $_POST['confirm_password'];

// Verificar que las nuevas contraseñas coincidan
if ($newPassword !== $confirmPassword) {
    echo json_encode(['status' => 'error', 'message' => 'Las contraseñas no coinciden.']);
    exit;
}

// Actualizar la contraseña en la base de datos
$hashedPassword = md5($newPassword); // Usar md5 para la nueva contraseña
$query = "UPDATE user SET password = ? WHERE email = ?";
$stmt = $con->prepare($query);
$stmt->bind_param("si", $hashedPassword, $_SESSION['email']); // Asegúrate de usar "si" para string e integer
$stmt->execute();

echo json_encode(['status' => 'success', 'message' => 'Contraseña actualizada con éxito.']);