<!-- llamar a la libreria -->
<?php
$nombre= $_POST["nombre"];
$email= $_POST["email"];
$telefono= $_POST["telefono"];
$asunto= $_POST["asunto"];
$mensaje= $_POST["mensaje"];

$body ="nombre:" . $nombre . "<br>email:" . $email . "<br>telefono:" . $telefono . "<br>asunto:" . $asunto . "<br>mensaje:" . $mensaje;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // SMTP::DEBUG_SERVER;
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'eliassoto.ingenieria@gmail.com';                     //SMTP username
    $mail->Password   = 'coimcjzvoxrleija';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email,$nombre);
    $mail->addAddress('eliassoto.ingenieria@gmail.com');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->charset ='UTF-8';
    $mail->send();
    echo '<script>
    alert("el mensaje se envío correctamente");
    window.history.go(-1);
    </script>
    ';
} catch (Exception $e) {
    echo "hubo un error en eviar el mensaje: {$mail->ErrorInfo}";
}
?>