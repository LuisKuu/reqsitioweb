<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailerController extends Controller {

     // ========== [ Compose Email ] ================
    public function composeEmail(Request $request) {
        //require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {

            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            //Configuracion servidor mail
            $mail->From = "cursos.laravel.correos@gmail.com"; //remitente
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls'; //seguridad
            $mail->Host = "smtp.gmail.com"; // servidor  smtp.gmail.com smtp.office365.com
            $mail->Port = 587; //puerto
            $mail->Username ='cursos.laravel.correos@gmail.com'; //nombre usuario
            $mail->Password = 'AbejaGuardiana'; //contrase?a
            
            //Agregar destinatario
            $mail->AddAddress("jobs@talentscode.com");
            $mail->isHTML(true);
            $mail->Subject = "Contacto Web";
            $mail->setFrom('cursos.laravel.correos@gmail.com', 'Contacto Web');
            $mail->Body .= 'Name: '.$request->name.'<br>';
            $mail->Body .= 'Email: '.$request->email.'<br>';
            $mail->Body .= 'Tel: '.$request->tel.'<br>';
            $mail->Body .= 'Message: <br>';
            $mail->Body .= $request->message;

            if( !$mail->send() ) {
                return "Email not sent.";
            }
            
            else {
                return "Email has been sent.";
            }

        } catch (Exception $e) {
             return 'Message could not be sent.';
        }
    }
}