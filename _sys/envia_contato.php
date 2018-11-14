<?php
$nome=$_POST['nome'];
$email=$_POST['email'];
$mensagem=$_POST['mensagem'];

use PHPMailer\PHPMailer\PHPMailer;

require_once "PHPMailer/PHPMailer.php";

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail ->setLanguage('pt-br','../_sys/PHPMailer/');
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tsl';
$mail->SMTPSAuth = true;
$mail->Username = 'ericksonppu@gmail.com';
$mail->Password= '18203568';

$mail-> setfrom("ericksonppu@gmail.com","Cadastro de Produto");
$mail->addAddress("ericksonppu@gmail.com","Erickson");
$mail->Subject = "Email de cadastro na loja";
$mail->msgHTML =("<html>De: {$nome} \n E-mail: {$email}\n Mensagem: {$mensagem}.</html>");
$mail->AltBody= "De: {$nome} \n E-mail: {$email}\n Mensagem: {$mensagem}";

    if($mail->send()) {
        $_SESSION["success"] = "Mensagem enviada com sucesso";
        header("Location: index.php");
    } else {
        $_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;
        header("Location: contato.php");
    }
    die();
