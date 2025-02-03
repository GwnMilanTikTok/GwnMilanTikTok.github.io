<?php
// Zorg ervoor dat PHPMailer beschikbaar is
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Zorg ervoor dat PHPMailer goed is geïnstalleerd via Composer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verkrijg de formuliergegevens
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Maak een nieuw PHPMailer object aan
    $mail = new PHPMailer(true);

    try {
        // SMTP instellingen
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';  // Gebruik de Gmail SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'gewoonmilanmail@gmail.com';  // Je Gmail e-mailadres
        $mail->Password   = 'je_app_wachtwoord';  // Het app-wachtwoord dat je zojuist hebt gegenereerd
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;  // De poort voor TLS verbindingen
        
        

        // E-mailinstellingen
        $mail->setFrom('gewoonmilanmail@gmail.com', 'Contactformulier');
        $mail->addAddress('gewoonmilanmail@gmail.com'); // Je eigen e-mailadres waar het bericht heen moet
        $mail->addReplyTo($email, $name); // Het antwoordadres is het e-mailadres van de verzender

        // E-mailinhoud
        $mail->isHTML(true);
        $mail->Subject = 'Nieuw bericht van contactformulier';
        $mail->Body    = "<h2>Nieuw bericht van $name</h2>
                          <p><strong>Email:</strong> $email</p>
                          <p><strong>Bericht:</strong></p>
                          <p>$message</p>";

        // Verstuur de e-mail
        $mail->send();
        echo 'Bericht succesvol verstuurd!';
    } catch (Exception $e) {
        echo "E-mail kon niet worden verzonden. Foutmelding: {$mail->ErrorInfo}";
    }
} else {
    echo "Fout bij verzenden van bericht.";
}
?>
