<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

function phpmailersender(
    $prenom,$nom,$email,$objet,$message
)
{
    // Créer une nouvelle instance de PHPMailer
    $mail = new PHPMailer(true);

    // Utiliser SMTP
    $mail->isSMTP();

    // Informations SMTP
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'tiana.vola39@gmail.com';
    $mail->Password = 'Ri@147852';
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;    

    // Adresse expéditeur
    $mail->setFrom('tiana.vola39@gmail.com', 'Gasy');

    // Adresse destinataire
    $mail->addAddress('niova@live.fr', 'Niova');

    // Objet du mail
    $mail->Subject = $objet;

    // Message
    $mail->msgHTML(
        'Prénom : '.$prenom.'<br>'.
        'Nom : '.$nom.'<br>'.
        'E-mail : '.$email.'<br>'.
        'Objet : '.$objet.'<br>'.
        'Message : '.$message.'<br>'
    );

    return $mail->send();
}

function simpleMailSender(
    $email,$objet,$message
)
{
    return mail(
         $email,
         $objet,
         $message,
        [],
        ""
    );
}

if(isset($_POST)) {
    // Récupérer les données transmis depuis le formulaire

    //pour Logger les variables sur le serveur
    //var_dump($_POST);

    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $objet = $_POST['objet'];
    $message = $_POST['message'];

    $mailMessage = 'Prénom : '.$prenom.'<br>'.
    'Nom : '.$nom.'<br>'.
    'E-mail : '.$email.'<br>'.
    'Objet : '.$objet.'<br>'.
    'Message : '.$message.'<br>';

    // Envoi du message
    if (!simpleMailSender(
        $email, $objet , $mailMessage
    )) {
        echo json_encode(array('message' =>  "failed"));
    } else {
        echo json_encode(array('message' =>  "success"));
    }
} else {
    echo json_encode(array('message' =>  "cannot use this script!!"));
}
