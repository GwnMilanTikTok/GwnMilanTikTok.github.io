<?php
// Verbinding maken met de database
$servername = "localhost";
$username = "root"; // Je databasegebruikersnaam
$password = ""; // Je databasewachtwoord
$dbname = "gwnwebdb"; // De naam van je database

// Maak de verbinding
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}

// Wanneer het formulier is verzonden
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verkrijg de gegevens uit het formulier
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Controleer of de wachtwoorden overeenkomen
    if ($password !== $confirm_password) {
        echo "Wachtwoorden komen niet overeen!";
        exit();
    }

    // Versleutel het wachtwoord
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Controleer of de gebruiker al bestaat (gebruikersnaam of e-mail)
    $check_user_query = "SELECT * FROM users WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($check_user_query);
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Debugging: Toon de resultaten van de query
        // echo "Resultaat gevonden: " . $result->num_rows;
        echo "Deze gebruikersnaam of e-mail is al in gebruik.";
        exit();
    }

// De rest van de code blijft hetzelfde...

// Voeg de nieuwe gebruiker toe aan de database
$sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $username, $email, $hashed_password);

if ($stmt->execute()) {
    // Redirect naar de pagina die bevestigt dat de registratie voltooid is
    header("Location: registration_success.php");
    exit();
} else {
    echo "Er is iets misgegaan, probeer het later opnieuw.";
}

// Sluit de statement en de verbinding
$stmt->close();
$conn->close();

}
?>
