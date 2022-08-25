<?php

namespace App\EnviarEmail;

require __DIR__ . '../../../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


class EnviarEmail
{
    public static function EnviarCadastro($email, $nome, $cpf)
    {
        //Formatação do dados
        $nome = strtolower($nome);
        $nome = ucwords($nome);


        // Instância da classe
        $mail = new PHPMailer(true);
        try {
            // Configurações do servidor
            $mail->isSMTP();        //Devine o uso de SMTP no envio
            $mail->SMTPAuth   = true; //Habilita a autenticação SMTP
            $mail->Username   = EMAIL;
            $mail->Password   = SENHA_EMAIL;
            // Criptografia do envio SSL também é aceito
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

            // Informações específicadas pelo Google
            $mail->Host = 'smtp.office365.com';
            $mail->Port = 587;
            // Define o remetente
            $mail->setFrom(EMAIL, 'Equipe Alumni UBM');
            $mail->addReplyTo(EMAIL, 'Equipe Alumni UBM');
            // Define o destinatário
            $mail->addAddress($email);
            // Conteúdo da mensagem
            $mail->isHTML(true);  // Seta o formato do e-mail para aceitar conteúdo HTML
            $mail->Subject = utf8_decode('Verificação de existência em arquivos');
            $mail->Body    = utf8_decode("
            
            <html><head>
									<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1\' />
									<title>Untitled Document</title>
									<style type=\"text/css\">
										<!--
										.texto10 {
													font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 10px;
												}
										.texto12 {
													font-family: Verdana, Arial, Helvetica, sans-serif;	font-size: 12px;
												}
										-->
									</style>
									</head>
									<body>
									<p>Caro(a) <strong>$nome</strong>,</p>
									<p>Foi solicitada a verificação para existência de aluno no arquivo da instituição <a href='https://ubm.br'>UBM</a>.<br /><br />
									<strong>Dados do solicitante:</strong><br />
									CPF: $cpf <br />
									Nome: $nome  <br />
									Email: $email  <br />
									<br />
                                    Caso n&atilde;o tenha feito o pedido, desconsidere esse e-mail.<br/>
									<p>Atenciosamente,
									</p>
									<table border='0' cellspacing='5' class='texto10'>
									<tr>
									<td><strong><font size=\"1\" face=\"Verdana, Arial, Helvetica, sans-serif\"><br />
									 </font></strong><img style='width: 30%;' src='http://sistema.ubm.br:8090/alumni/views/assets_interno/img/logo.png'></img>
									<hr noshade='noshade' />
									<font size='1'><span class='texto12'><font size='2' face='Verdana, Arial, Helvetica, sans-serif'><strong>UBM Alumni</strong></font></span></font></td>
									</tr>
									<tr>
									<td height='62' nowrap='nowrap'><p><a href='mailto:ouvidoria@ubm.br'><strong><font size='1' face='Verdana, Arial, Helvetica, sans-serif'>ouvidoria@ubm.br</font></strong></a><font size='1' face='Verdana, Arial, Helvetica, sans-serif'><strong><br />
									NCS - N&uacute;cleo de Comunica&ccedil;&atilde;o Social<br />
									CAMPUS BARRA MANSA</strong><br />
									Centro Universit&aacute;rio de Barra Mansa - UBM - <strong><a href='http://www.ubm.br'>www.ubm.br</a>	</strong></font></p></td>
									</tr>
									</table>
									</body>
									</html>
            
            ");
            $mail->AltBody = utf8_decode('Este é o cortpo da mensagem para clientes de e-mail que não reconhecem HTML');
            // Enviar
            $mail->send();
            // echo 'A mensagem foi enviada!';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error";
        }
    }
}