<?php
// Récupérer les données du formulaire
$destinataire = « rtmecapro@outlook.fr »;
$sujet = « Sujet de l’e-mail »;
$message = « Contenu de l’e-mail »;

// Charger les paramètres de configuration de sendmail depuis le fichier sendmail.ini
ini_set(« SMTP », « smtp.example.com »);
ini_set(« smtp_port », « 25 »);
ini_set(« sendmail_from », « expediteur@example.com »);

// En-têtes de l’e-mail
$headers = « From: expediteur@example.com\r\n »;
$headers .= « Reply-To: expediteur@example.com\r\n »;
$headers .= « X-Mailer: PHP/«  . phpversion();

// Envoyer l’e-mail
if (mail($destinataire, $sujet, $message, $headers)) {
    echo « L’e-mail a été envoyé avec succès. »;
} else {
    echo « Erreur lors de l’envoi de l’e-mail. »;
}
?>
