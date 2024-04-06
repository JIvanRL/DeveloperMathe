<?php
session_start(); // Inicia la sesión

// Incluye el archivo de configuración de la base de datos y la conexión
include_once 'dbConnection.php';

// Recuperar el token del formulario
$token = $_POST['token'];

// Busca el token en la base de datos
$query = "SELECT email FROM password_reset_tokens WHERE token = ?";
$stmt = $con->prepare($query);
$stmt->bind_param("s", $token);
$stmt->execute();
$result = $stmt->get_result();

// Verificar si la consulta devolvió algún resultado
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $userEmail = $user['email'];

    // Recuperar los datos del formulario
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    // Verificar que las nuevas contraseñas coincidan
    if ($newPassword !== $confirmPassword) {
        echo json_encode(['status' => 'error', 'message' => 'Las contraseñas no coinciden.']);
        exit;
    }

    // Actualizar la contraseña en la base de datos
    $hashedPassword = md5($newPassword); // Usar password_hash para la nueva contraseña
    $query = "UPDATE user SET password = ? WHERE email = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ss", $hashedPassword, $userEmail); // Asegúrate de usar "ss" para string
    $stmt->execute();

    // Eliminar el token de la base de datos
    $query = "DELETE FROM password_reset_tokens WHERE token = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $token);
    $stmt->execute();

    echo json_encode(['status' => 'success', 'message' => 'Contraseña actualizada con éxito.']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Token no válido o expirado.']);
}
