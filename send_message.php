<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recogemos los datos del formulario y los limpiamos para evitar inyecciones
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Verificamos que los campos no estén vacíos
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Destinatario (puedes cambiar esto a tu correo)
        $to = "tucorreo@ejemplo.com";
        // Asunto del correo
        $subject = "Nuevo mensaje de $name";
        // Cuerpo del correo
        $body = "Nombre: $name\nCorreo: $email\nMensaje:\n$message";
        // Encabezados para el envío de correo
        $headers = "From: $email";

        // Intentamos enviar el correo
        if (mail($to, $subject, $body, $headers)) {
            echo "<h2>Mensaje enviado correctamente.</h2>";
            echo "<p>Gracias por contactarnos, $name. Te responderemos a la brevedad.</p>";
        } else {
            echo "<h2>Error al enviar el mensaje.</h2>";
            echo "<p>Por favor intenta nuevamente más tarde.</p>";
        }
    } else {
        echo "<h2>Por favor completa todos los campos.</h2>";
    }
} else {
    // Si la petición no es POST, mostramos un error
    echo "<h2>Solicitud no permitida.</h2>";
}
?>
