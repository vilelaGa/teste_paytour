<?php

namespace App\EnviarEmail;

require __DIR__ . '../../../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


class EnviarEmail
{
    public static function EnviarCadastro($email, $nome)
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
            $mail->setFrom(EMAIL, 'Equipe RH Teste Paytour');
            $mail->addReplyTo(EMAIL, 'Equipe RH Teste Paytour');
            // Define o destinatário
            $mail->addAddress($email);
            // Conteúdo da mensagem
            $mail->isHTML(true);  // Seta o formato do e-mail para aceitar conteúdo HTML
            $mail->Subject = utf8_decode('Envio Teste RH Paytour');
            $mail->Body    = utf8_decode('
            
            <!DOCTYPE html>
            <html>
            <head>
            <title></title>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <style type="text/css">
            /* FONTS */
            @import url("https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i");

            /* CLIENT-SPECIFIC STYLES */
            body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
            table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
            img { -ms-interpolation-mode: bicubic; }

            /* RESET STYLES */
            img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
            table { border-collapse: collapse !important; }
            body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }

            /* iOS BLUE LINKS */
            a[x-apple-data-detectors] {
              color: inherit !important;
              text-decoration: none !important;
              font-size: inherit !important;
              font-family: inherit !important;
              font-weight: inherit !important;
              line-height: inherit !important;
            }

            /* MOBILE STYLES */
            @media screen and (max-width:600px){
              h1 {
                font-size: 32px !important;
                line-height: 32px !important;
              }
            }

            /* ANDROID CENTER FIX */
            div[style*="margin: 16px 0;"] { margin: 0 !important; }
            </style>
            </head>
            <body style="background-color: #f3f5f7; margin: 0 !important; padding: 0 !important;">

            <!-- HIDDEN PREHEADER TEXT -->
            <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: \'Poppins\', sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
            Estamos muito felizes em ter vocÃª aqui!
            </div>

            <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <!-- LOGO -->
            <tr>
            <td align="center">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
            <tr>
            <td align="center" valign="top" style="padding: 40px 10px 10px 10px;">
            <a href="#" target="_blank" style="text-decoration: none;">
            <span style="display: block; font-family: \'Poppins\', sans-serif; color: #3e8ef7; font-size: 36px;" border="0">
            <img src="https://www.paytour.com.br/wp-content/uploads/2021/06/logo-paytour.svg" alt="">       
            </span>
            </a>
            </td>
            </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
            </td>
            </tr>
            <!-- HERO -->
            <tr>
            <td align="center" style="padding: 0px 10px 0px 10px;">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
            <tr>
            <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: \'Poppins\', sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 2px; line-height: 48px;">
            <h1 style="font-size: 36px; font-weight: 600; margin: 0;">Olá! ' . $nome . '</h1>
            </td>
            </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
            </td>
            </tr>
            <!-- COPY BLOCK -->
            <tr>
            <td align="center" style="padding: 0px 10px 0px 10px;">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
            <!-- COPY -->
            <tr>
            <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 20px 30px; color: #666666; font-family: \'Poppins\', sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
            <p style="margin: 0;">
            Recebemos o seu currículo, nossa equipe vai analisar e passar um feedback.
            </p>
            <p style="margin: 20px 0 20px 0;">E-mail: <strong> ' . $email . ' </strong></p>
            </td>
            </tr>
            <!-- BULLETPROOF BUTTON -->
            <tr>
            <td bgcolor="#ffffff" align="left">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
            <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 30px 30px;">
            <table border="0" cellspacing="0" cellpadding="0">
            <tr>
            <td align="center" style="border-radius: 3px;" bgcolor="#9548e4"><a href="' . URL_BASE . '" target="_blank" style="font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 12px 50px; border-radius: 2px; border: 1px solid #9548e4; display: inline-block;">Visite nosso site</a></td>
            </tr>
            </table>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            <!-- COPY -->
            
            <!-- COPY -->
            <tr>
            <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 20px 30px; color: #666666; font-family: &apos;Lato&apos;, Helvetica, Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 25px;">
            <p style="margin: 0;"><a href="' . URL_BASE . '" target="_blank" style="color: #9548e4;">www.paytour.com.br/</a></p>
            </td>
            </tr>
            <!-- COPY -->
            <tr>
            <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 20px 30px; color: #666666; font-family: &apos;Lato&apos;, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
            <p style="margin: 0;">Se você tiver alguma duvida , responda a este e-mail estaremos sempre dispostos a ajudar.</p>
            </td>
            </tr>
            <!-- COPY -->
            <tr>
            <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 40px 30px; border-radius: 0px 0px 0px 0px; color: #666666; font-family: \'Poppins\', sans-serif; font-size: 14px; font-weight: 400; line-height: 25px;">
            <p style="margin: 0;">Paytour,<br>RH</p>
            </td>
            </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
            </td>
            </tr>
            <!-- FOOTER -->
            <tr>
            <td align="center" style="padding: 10px 10px 50px 10px;">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
            <!-- NAVIGATION -->

            <!-- PERMISSION REMINDER -->
            <tr>
            <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 30px 30px; color: #aaaaaa; font-family: \'Poppins\', sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
            <p style="margin: 0;">Você recebeu este e-mail porque acabou de se inscrever em uma vaga. <a href="' . URL_BASE . '" target="_blank" style="color: #999999; font-weight: 700;">Veja isso no seu navegador</a>.</p>
            </td>
            </tr>
            <!-- UNSUBSCRIBE -->

            <!-- ADDRESS -->
            <tr>
            <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 30px 30px; color: #aaaaaa; font-family: \'Poppins\', sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
            <p style="margin: 0;">www.paytour.com.br</p>
            </td>
            </tr>
            <!-- COPYRIGHT -->
            <tr>
            <td align="center" style="padding: 30px 30px 30px 30px; color: #333333; font-family: \'Poppins\', sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
            <p style="margin: 0;">Copyright ©' . date('Y') . ' Paytour. All rights reserved.</p>
            </td>
            </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
            </td>
            </tr>
            </table>

            </body>
            </html>
            
            ');
            $mail->AltBody = utf8_decode('Este é o cortpo da mensagem para clientes de e-mail que não reconhecem HTML');
            // Enviar
            $mail->send();
            // echo 'A mensagem foi enviada!';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error";
        }
    }
}
