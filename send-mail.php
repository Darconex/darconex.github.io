<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $sujet = htmlspecialchars($_POST['sujet']);
    $message = htmlspecialchars($_POST['message']);

    // Adresse email où les messages seront envoyés
    $to = "votre-adresse-email@example.com"; // Remplacez par votre adresse email
    $subject = "Nouveau message de $nom via le formulaire de contact";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Composer le message
    $emailBody = "Nom: $nom\n";
    $emailBody .= "Email: $email\n";
    $emailBody .= "Sujet: $sujet\n";
    $emailBody .= "Message:\n$message\n";

    $to = "admin@darconex.com";
    
    // Envoyer l'email
    if (mail($to, $subject, $emailBody, $headers)) {
        echo "Message envoyé avec succès.";
    } else {
        echo "Une erreur est survenue lors de l'envoi du message.";
    }
} else {
    echo "Méthode non autorisée.";
}
?>
