<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

function enviar_correo( $correo , $pass)
{
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0; //SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP(); // Send using SMTP
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'contmarian99@gmail.com'; // SMTP username
        $mail->Password = 'andrei1234567'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port = 587; // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('contmarian99@gmail.com', 'Proyecto integrado 2020');
        $mail->addAddress(/*'mariansomesa@gmail.com'*/$correo, 'Joe User'); // Add a recipient

        /* Attachments
        $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name*/

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Prueba de correo';
        $mail->Body = '<html>
    <body>
    <h1>Este mensaje contiene su contraseña de acceso a la plataforma</h1>
    <h2>No olviden sus credenciales </h2>
    <p>Usuario :'.$correo.' </p>
    <p>Contraseña : '.$pass.'</p>
        <br/>
    </body>
    </html>';
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}
