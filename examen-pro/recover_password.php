<?php
include_once 'dbConnection.php';
function checkIfEmailExistsInDatabase($email, $con) {
    $sql = "SELECT * FROM user WHERE email = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}


// Asegúrate de que el formulario se haya enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["recover_email"])) {
    $email = $_POST["recover_email"];

    // Verifica si el correo electrónico existe en la base de datos
    if (checkIfEmailExistsInDatabase($email, $con)) {
        // El correo electrónico existe, procede con la generación del token y el envío del correo electrónico
        $token = bin2hex(random_bytes(50)); // Ejemplo de generación de token
        $resetLink = "https://tu-sitio-web.com/reset_password.php?token=$token";
        $to = $email;
        $subject = "Recuperación de contraseña";
        $message = "Hola,\n\nHemos recibido una solicitud para restablecer tu contraseña. Por favor, haz clic en el siguiente enlace para restablecer tu contraseña:\n\n$resetLink\n\nSi no solicitaste este restablecimiento, por favor ignora este correo electrónico.\n\nSaludos,\nTu equipo de soporte";
        $headers = "From: soporte@tu-sitio-web.com\r\n";

        // Envía el correo electrónico
        if (mail($to, $subject, $message, $headers)) {
            echo "Se ha enviado un correo electrónico con instrucciones para restablecer tu contraseña.";
        } else {
            echo "Hubo un error al enviar el correo electrónico. Por favor, inténtalo de nuevo más tarde.";
        }
    } else {
        // El correo electrónico no existe, muestra un mensaje al usuario
        echo "El correo electrónico proporcionado no está registrado en nuestro sistema.";
    }
} else {
    // Redirige al usuario a la página de inicio o muestra un mensaje de error si el formulario no se envió correctamente
    header("Location: index.php");
    exit;
}
?>
