<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='{{asset("css/inscription.css")}}'>
    <title>Inscription</title>
</head>  
<body>
        <div class="register-page">

        <!-- PARTIE GAUCHE : message de bienvenue -->
        <div class="register-left">
            <div class="register-welcome">
                <h1>Perfect <span> Home</span></h1>

                <div class="register-quote">
                    "La meilleure façon de réussir est de travailler Intelligemment."
                </div>
            </div>
        </div>

        <!-- PARTIE DROITE : formulaire -->
        <div class="register-right">
            <div class="register-form-container">
                <h2>Créer un compte</h2>
                <p class="register-subtitle">Remplis le formulaire pour rejoindre les Best</p>

                <form class="register-form" >
                    <div class="form-group">
                        <label for="name">Nom complet</label>
                        <input id="name" type="text" required autofocus tabindex="1" autocomplete="name"  placeholder="Ton nom complet">
                    </div>

                    <div class="form-group">
                        <label for="email">Adresse email</label>
                        <input id="email" type="email" required tabindex="2" autocomplete="email" placeholder="email@exemple.com">
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input id="password" type="password" required tabindex="4" autocomplete="new-password" v-model="password" placeholder="Mot de passe">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirmer le mot de passe</label>
                        <input id="password_confirmation" type="password" required tabindex="5" autocomplete="new-password" v-model="password_confirmation" placeholder="Confirmer le mot de passe">
                    </div>

                    <button type="submit" class="register-btn" tabindex="6">Créer mon compte</button>

                    <div class="register-login-link">Déjà un compte ?
                        <a href="login">Se connecter</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>
</html>
