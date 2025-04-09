<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupération et sécurisation des données
    $avis = htmlspecialchars($_POST['avis']);
    $email = htmlspecialchars($_POST['email']);

    // Adresse email du destinataire
    $to = "diegostrange33@gmail.com";
    $subject = "Nouvel avis sur Arcane";

    // Construction du message
    $message = "Avis : $avis\nEmail : $email";

    // En-têtes pour l'envoi de l'email
    $headers = "From: no-reply@example.com";

    // Envoi de l'email
    if (mail($to, $subject, $message, $headers)) {
        echo "Merci pour votre avis ! Votre message a été envoyé.";
    } else {
        echo "Désolé, une erreur est survenue lors de l'envoi de votre avis.";
    }
} else {
    echo "Erreur : Méthode invalide.";
}
?>