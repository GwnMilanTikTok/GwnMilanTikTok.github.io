<?php
session_start();  // Start een sessie om gebruikersgegevens op te slaan tijdens de sessie

// Verbinden met de database
require_once 'db.php';

// Controleren of het formulier is verzonden
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Verkrijg de waarden van de gebruikersnaam en het wachtwoord
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Zoek naar de gebruiker in de database
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Als er een gebruiker is gevonden
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Vergelijk het ingevoerde wachtwoord met het gehashte wachtwoord in de database
        if (password_verify($password, $user['password'])) {
            // Sla de gebruikersgegevens op in de sessie
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            
            // Redirect naar de homepagina (of een andere pagina)
            header("Location: index.php"); // ONTHOUD DIT MILAN VOOR EEN WIJZEGING!!!
            exit();
        } else {
            // Wachtwoord is incorrect
            echo "Onjuist wachtwoord!";
        }
    } else {
        // Gebruiker bestaat niet
        echo "Onbekende gebruikersnaam!";
    }

    // Sluit de statement en de verbinding
    $stmt->close();
    $conn->close();
} else {
    // Als de gebruikersnaam of het wachtwoord niet zijn ingesteld
    echo "Vul alstublieft zowel de gebruikersnaam als het wachtwoord in.";
}
?>
