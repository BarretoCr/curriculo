<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "tuemail@ejemplo.com";  // Reemplaza con tu email
    $subject = "Nuevo mensaje de $name";
    $body = "Nombre: $name\nCorreo: $email\nMensaje:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>
