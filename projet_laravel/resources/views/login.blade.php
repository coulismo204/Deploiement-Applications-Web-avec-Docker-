<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='{{asset("css/connexion.css")}}'>
    <title>Connexion</title>
</head>
<body>
      <div class="page">
    <div class="header">
      <span class="logo-white">Perfect</span><span class="logo-orange"> Home</span>
    </div>

    <div class="cadre">
      <h1 class="titre">Connexion</h1>
      <p class="sous-titre">L'argent appartient a personne la preuve on meurt pour laisser  .</p>


      <form >
        <div class="input-group">
          <label>Adresse email</label>
          <input v-model="email" type="email" placeholder="ton.email@exemple.com" />
        </div>

        <div class="input-group">
          <label>Mot de passe</label>
          <input v-model="password" type="password" placeholder="••••••••" />
        </div>

        <button type="submit" class="btn">
          Se connecter →
        </button>
      </form>

  
      <p class="signup">
        Pas encore de compte ? <a href="register">S'inscrire</a>
      </p>
    </div>
  </div>
</body>

</html>
