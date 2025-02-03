<?php
$servername = "localhost";
$username = "root";  // Standaard username voor XAMPP is meestal 'root'.
$password = "";      // Standaard wachtwoord voor XAMPP is leeg.
$dbname = "gwnwebdb"; // Gebruik de naam van de database die je hebt aangemaakt.

// Maak verbinding
$conn = new mysqli($servername, $username, $password, $dbname);

// Check verbinding
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}
?>
