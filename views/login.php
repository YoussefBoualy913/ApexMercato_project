<?php
session_start();
if (isset($_POST['submit'])) {

    if ($_POST['username'] == "admin" && $_POST['password'] == "admin") {

        $_SESSION['username'] = "admin";
        $_SESSION['password'] = "admin";
        header('location:admin_dashboard.php');
        exit;
    }

    if ($_POST['username'] == "journaliste" && $_POST['password'] == "journaliste") {

        $_SESSION['username'] = "journaliste";
        $_SESSION['password'] = "journaliste";
        header('location:journaliste_view.php');
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Apex Management</title>
    <link rel="stylesheet" href="../style.css">
    <style>

    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <div class="login-header">
                <div class="login-logo">⚡</div>
                <h1 class="login-title">APEX Management</h1>
                <p class="login-subtitle">Connectez-vous à votre espace</p>
            </div>

            <div class="error-message" id="errorMessage">
                ❌ Identifiants incorrects. Veuillez réessayer.
            </div>

            <div class="success-message" id="successMessage">
                ✓ Connexion réussie ! Redirection en cours...
            </div>

            <form id="loginForm" method="POST">
                <div class="input-group">
                    <label for="username">Nom d'utilisateur</label>
                    <div class="input-wrapper">
                        <span class="input-icon">👤</span>
                        <input
                            type="text"
                            id="username"
                            name="username"
                            class="login-input"
                            placeholder="Entrez votre nom d'utilisateur"
                            required>
                    </div>
                </div>

                <div class="input-group">
                    <label for="password">Mot de passe</label>
                    <div class="input-wrapper">
                        <span class="input-icon">🔒</span>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="login-input"
                            placeholder="Entrez votre mot de passe"
                            required>
                        <button type="button" class="password-toggle" id="togglePassword">

                        </button>
                    </div>
                </div>

                <div class="remember-forgot">
                    <label class="remember-me">
                        <input type="checkbox" id="rememberMe">
                        <span>Se souvenir de moi</span>
                    </label>
                    <a href="#" class="forgot-password">Mot de passe oublié ?</a>
                </div>

                <button type="submit" name="submit" class="login-button">
                    Se connecter
                </button>
            </form>

            <div class="divider"> <a href="#" class="forgot-password">Continuer sans connexion</a></div>

        </div>
    </div>


</body>

</html>