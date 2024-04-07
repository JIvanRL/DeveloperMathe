<?php
// Incluye el archivo de configuración de la base de datos y la conexión
include_once 'dbConnection.php';

// Incluye las clases necesarias de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Carga las dependencias de PHPMailer
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Función para verificar si el correo electrónico existe en la base de datos
function checkIfEmailExistsInDatabase($email, $con) {
    $sql = "SELECT * FROM user WHERE email = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->num_rows > 0;
}

// Asegúrate de que el formulario se haya enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["recover_email"])) {
    $email = $_POST["recover_email"];

    // Verifica si el correo electrónico existe en la base de datos
    if (checkIfEmailExistsInDatabase($email, $con)) {
        // Genera un token
        $token = bin2hex(random_bytes(50));

        // Almacena el token en la base de datos junto con el correo electrónico del usuario
        $query = "INSERT INTO password_reset_tokens (email, token) VALUES (?, ?)";
        $stmt = $con->prepare($query);
        $stmt->bind_param("ss", $email, $token);
        $stmt->execute();

        // Configura la instancia de PHPMailer
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        //$mail->Host = 'smtp-mail.outlook.com';
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ivanril.tecdeveloper@gmail.com'; // Tu dirección de correo electrónico de Gmail
        $mail->Password = 'jzzu quuq kxis alxd'; // Tu contraseña de outlook o gmail
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Configura el remitente y el destinatario
        $mail->setFrom('ivanril.tecdeveloper@gmail.com', 'Soporte Técnico');
        $mail->addAddress($email);

        // Configura el contenido del correo
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8'; // Establece la codificación de caracteres
        $mail->Subject = 'Recuperación de contraseña';
        $mail->Body = 'Hola,<br><br>Hemos recibido una solicitud para restablecer tu contraseña. Por favor, haz clic en el siguiente enlace para restablecer tu contraseña:<br><br><a href="http://localhost/DeveloperMathe//examen-pro/cambio_contra.php?token=' . $token . '">Restablecer contraseña</a><br><br>Si no solicitaste este restablecimiento, por favor ignora este correo electrónico.<br><br>Saludos,<br>Tu equipo de soporte';

        // Intenta enviar el correo electrónico
        if (!$mail->send()) {
            // Si hay un error al enviar el correo, muestra un mensaje de error al usuario
            echo json_encode(['status' => 'error', 'message' => 'Error al enviar el correo electrónico. Por favor, inténtalo de nuevo más tarde.']);
        } else {
            echo json_encode(['status' => 'success', 'message' => 'Se ha enviado un correo electrónico con instrucciones para restablecer tu contraseña.']);
        }
    } else {
        // El correo electrónico no existe en la base de datos, muestra un mensaje de error al usuario
        echo json_encode(['status' => 'success', 'message' => 'El correo electrónico proporcionado no está registrado en nuestro sistema.']);
    }
} else {
    // El formulario no se envió correctamente, redirige al usuario a la página de inicio
    header("Location: index.php");
    exit;
}
