<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

$to = "soulef.kelkal@icloud.com"; 
$subject = "Nouveau message de ton site web";
$body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
$headers = "From: $email\r\nReply-To: $email\r\n";

if (mail($to, $subject, $body, $headers)) {
echo "✅ Merci $name, votre message a été envoyé avec succès.";
} else {
echo "❌ Désolé, une erreur s'est produite lors de l'envoi.";
}
}
?>