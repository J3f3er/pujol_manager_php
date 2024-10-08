<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();                                            // Send using SMTP
//    $mail->Host       = 'smtp.gmail.com';                     // Set the SMTP server to send through
    $mail->Host = 'live.smtp.mailtrap.io';
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
//    $mail->Username   = 'jbustamantealvarado1109@gmail.com';                     // SMTP username
    $mail->Username = 'api';
    $mail->Password   = '6da398436a37bff009264e288c3269d9';                          // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption
    $mail->Port       = 587;     
        
    /* $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );                          */    // TCP port to connect to

    // Sender and recipient
    $mail->setFrom('pujolmanager@demomailtrap.com', 'Soy Jeff');
    $mail->addAddress('jjbajb52@gmail.com', 'Amy');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Bienvenido a Pujol Manager';
    $mail->Body    = '<b>Bienvenidos sean todos ustedes a mi portal<b> de pujol manager para el mejor servicio de talentos. Aqui encontraras el mejor talento';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Mensaje enviado con Exito!!!';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>