<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registreren | GewoonMilan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Registratiepagina Sectie -->
    <section class="register-section">
        <div class="register-container">
            <h2>Maak een Account aan</h2>
            <p class="description">Vul de onderstaande gegevens in om een nieuw account te maken.</p>

            <!-- Formulier voor registratie -->
            <form action="register_process.php" method="POST" class="register-form">
                <div class="input-group">
                    <label for="username">Gebruikersnaam</label>
                    <input type="text" id="username" name="username" placeholder="vul hier je gebruikersnaam in" required>
                </div>

                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="vul hier je e-mail in" required>
                </div>

                <div class="input-group">
                    <label for="password">Wachtwoord</label>
                    <input type="password" id="password" name="password" placeholder="vul hier je wachtwoord in" required>
                </div>

                <div class="input-group">
                    <label for="confirm_password">Bevestig Wachtwoord</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="herhaal je wachtwoord" required>
                </div>

                <button type="submit" class="register-btn">Registreren</button>
            </form>

            <div class="login-link">
                <p>Heb je al een account? <a href="login.php">Log hier in</a></p>
            </div>
        </div>
    </section>

</body>
</html>

