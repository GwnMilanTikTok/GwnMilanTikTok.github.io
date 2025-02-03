<?php
session_start();

// Als de gebruiker niet is ingelogd, redirect naar de loginpagina
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Toon de gebruikersnaam
echo "Welkom, " . $_SESSION['username'] . "!";
?>
