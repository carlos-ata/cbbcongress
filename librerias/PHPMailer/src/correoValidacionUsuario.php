<?php

use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\SMTP;
use \PHPMailer\PHPMailer\PHPException;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

//configuracion de la clase phpmailer para envio de correo utilizando
//SMT 
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$email = 'congresomatematicas15@gmail.com';
$mail->Username = $email;
$mail->Password = "rsdxrhmuwdcovefj";

///contenifdo del correro electronico y configuracion de la cuenta 
/// para envio de correo
$mail->From = "congresomatematicas15@gmail.com";
$mail->FromName = "Congreso Internacional de Matemáticas";
$mail->Subject = "Verificación de correo electronico";
//$mail->AltBody = "Te confirmamos que hemos recibido tu resumen ";

//mensaje en html 
//<img src="/cbb/src/Banner-Oficial.jpg">
$mail->MsgHTML("

                <h1>Bienvenido(a) " . $nombres . " " . $apellidos . "<br></h1>
                <br>
                <h2>Se ha creado tu cuenta de forma exitosa, tu forma de 
                ingreso sera ingresando el siguiente codigo: <br></h2>
                
                <h2><b>" . $hash . "</b></h2> <br>
                
                <h2>Atentamente:<br><br>
                El Comite Organizador del Evento
                <br>
                Por mi Raza Hablará el Espíritu</h2>

                ");
//direccon de envio
$mail->AddAddress($correoElectronico);

$mail->IsHTML(true);

$mail->CharSet = 'UTF-8';

if (!$mail->Send()) {
    //si hay un error en el envio de correo se informa

    echo "Error: " . $mail->ErrorInfo;
} else {
    $usuarioNuevo = 1;
    session_start();
    $_SESSION['usuarioNuevo'] = $usuarioNuevo;
    $info = "Se ha registrado con exito, revise su bandeja de entrada para validar su correo electronico";
}
