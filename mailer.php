<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$mail = new PHPMailer();                              // Passing `true` enables exceptions
try {
    //Server settings
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;  
    $mail->SMTPSecure = 'ssl';                             // Enable SMTP authentication
    $mail->Username = 'fatimaquiropraxista@gmail.com';                 // SMTP username
    $mail->Password = '';                           // SMTP password
    $mail->Port = 587;                                    // TCP port to connect to


    //Recipients
    $mail->setFrom($email, $nome);
    $mail->addAddress('fatimaquiropraxista@gmail.com', 'Instituto Veiga');     // Add a recipient

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contato - ' . $assunto;
    $mail->Body    = 'Nome: ' . $nome . '<br/>Email: ' . $email . '<br/>Mensagem: ' . $mensagem;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Mensagem enviada!';
} catch (Exception $e) {
    echo 'A mensagem não pode ser enviada.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

header('Location: \contato.php');
?>