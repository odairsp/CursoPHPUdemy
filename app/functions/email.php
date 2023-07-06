<?php



function send(array $data)
{

    $mail = new PHPMailer\PHPMailer\PHPMailer;
    $mail->CharSet = 'UTF-8';
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output

    $mail->SMTPSecure = 'tls'; //PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'sandbox.smtp.mailtrap.io';             //Set the SMTP server to send through
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '88eef55d10e156';                       //SMTP username
    $mail->Password   = 'e7548264dd2dc6';                       //SMTP password

    //Recipients
    $mail->setFrom('php@example.com', $data['quem']);
    $mail->addAddress($data['para']);     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Body    = $data['mensagem']; //'This is the HTML message body <b>in bold!</b>';
    $mail->Subject = $data['assunto']; //'Here is the subject';
    $mail->AltBody = 'Para ver este mail tenha certeza de estar vendo em um programa que aceite ver HTML!';
    $mail->msgHTML($data['mensagem']);
    return $mail->send();
}