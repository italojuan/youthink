<?php
 
// Caminho da biblioteca PHPMailer
require 'phpmailer/class.phpmailer.php';
require 'phpmailer/PHPMailerAutoload.php';

//recebendo dados do formulario
$nome     = $_POST["nome"];
$email    = $_POST["email"];
$assunto  = $_POST["assunto"];
$mensagem = $_POST["mensagem"];
 
// Inst�ncia do objeto PHPMailer
$mail = new PHPMailer;
 
// Configura para envio de e-mails usando SMTP
$mail->isSMTP();
 
// Servidor SMTP
$mail->Host = 'smtp.gmail.com';
 
// Usar autentica��o SMTP
$mail->SMTPAuth = true;
 
// Usu�rio da conta
$mail->Username = 'rodolfo.ufrpe@gmail.com';
 
// Senha da conta
$mail->Password = 'dolfo123**';
 
// Tipo de encripta��o que ser� usado na conex�o SMTP
$mail->SMTPSecure = 'ssl';
 
// Porta do servidor SMTP
$mail->Port = 465;
 
// Informa se vamos enviar mensagens usando HTML
$mail->IsHTML(true);
 
// Email do Remetente
$mail->From = $email;
 
// Nome do Remetente
$mail->FromName = $nome;
 
// Endere�o do e-mail do destinat�rio
$mail->addAddress('rodolfo.ufrpe@gmail.com');
 
// Assunto do e-mail
$mail->Subject = $assunto;
 
// Mensagem que vai no corpo do e-mail
$mail->Body = $mensagem;
 
// Envia o e-mail e captura o sucesso ou erro
if($mail->Send()):
    echo 'Enviado com sucesso !';
else:
    echo 'Erro ao enviar Email:' . $mail->ErrorInfo;
endif;