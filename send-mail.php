<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $sujet = htmlspecialchars($_POST['sujet']);
    $message = htmlspecialchars($_POST['message']);

    // Adresse email où les messages seront envoyés
    $to = "admin@darconex.com";

    // Sujet de l'email
    $subject = "Nouveau message de $nom via le formulaire de contact";

    // En-têtes de l'email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Composer le corps de l'email
    $emailBody = "Nom: $nom\n";
    $emailBody .= "Email: $email\n";
    $emailBody .= "Sujet: $sujet\n";
    $emailBody .= "Message:\n$message\n";

    // Envoyer l'email
    if (mail($to, $subject, $emailBody, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur est survenue lors de l'envoi du message. Veuillez réessayer.";
    }
} else {
    echo "Méthode non autorisée.";
}
?>
