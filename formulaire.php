<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "nohaa.mdj@gmail.com";
    $subject = "Nouveau RDV depuis le site AKSO";
    $body = "Nom : $nom\nEmail : $email\nMessage :\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Votre message a bien été envoyé !'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Une erreur est survenue. Merci de réessayer.'); window.history.back();</script>";
    }
}
?>

