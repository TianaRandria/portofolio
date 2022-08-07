<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';


if(isset($_POST)) {
    // Récupérer les données transmis depuis le formulaire
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $objet = $_POST['objet'];
    $message = $_POST['message'];

    // Créer une nouvelle instance de PHPMailer
    $mail = new PHPMailer();

    // Utiliser SMTP
    $mail->isSMTP();

    // Informations SMTP
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'tiana.vola39@gmail.com';
    $mail->Password = 'Ri@147852';

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

    // Envoi du message
    if (!$mail->send()) {
        echo 'Erreur : ' . $mail->ErrorInfo;
    } else {
        echo 'Le mail a été envoyé !';
    }
} else {
    echo 'Vous ne pouvez utiliser ce script directement !!!';
}
