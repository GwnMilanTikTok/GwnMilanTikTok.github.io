<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inloggen | GWN Web</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Inlogpagina Sectie -->
    <section class="login-section">
        <div class="login-container">
            <h2>Inloggen</h2>
            <p class="description">Voer je gegevens in om in te loggen op je account.</p>
            
            <form action="login_process.php" method="POST" class="login-form">
                <div class="input-group">
                    <label for="username">Gebruikersnaam</label>
                    <input type="text" id="username" name="username" placeholder="vul hier je gebruikersnaam in" required>
                </div>
                
                <div class="input-group">
                    <label for="password">Wachtwoord</label>
                    <input type="password" id="password" name="password" placeholder="vul hier je wachtwoord in" required>
                </div>
                
                <button type="submit" class="login-btn">Inloggen</button>
            </form>
            
            <div class="register-link">
                <p>Geen account? <a href="register.php">Registreer hier</a></p>
            </div>
        </div>
    </section>

</body>
</html>
