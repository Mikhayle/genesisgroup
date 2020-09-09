<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$email = $_POST['user_email'];



$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'genesisgroup_request@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'asdf456123'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('genesisgroup_request@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('sales@dialoq.com');     // Кому будет уходить письмо 

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с сайта Genesisgroup.ch';
$mail->Body    = 'Пользователь оставил e-mail для связи: ' .$email;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    exit('<meta http-equiv="refresh" content="0; url=index.php" />');
}
?>