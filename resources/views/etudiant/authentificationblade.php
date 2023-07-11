<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<style>
        .logo{
    border-radius: 50%;
    position: relative;
    left: 70px;
    /* bottom: 100px; */
    top: 5px;
  }
    </style>
<!-- <header>
  <nav>
   
    <ul class="menu">
      <li><a href="listeeleve.php">Ajouter une moyenne</a></li>
      <li><a href="administrateur.php">Déconnexion</a></li>
    </ul>
  </nav>
</header> -->
<body>
  <form>
      <img class="logo" src="../images/MySchool.png" alt="" height="160" width="160">
    <h1>Se connecter</h1>
    <div class="social-media">
      <p><i class="fab fa-google"></i></p>
      <p><i class="fab fa-facebook-f"></i></p>
      <p><i class="fab fa-twitter"></i></p>
    </div>
    <p class="choose-email">ou utiliser mon adresse e-mail :</p>
    
    <div class="inputs">
      <input type="email" placeholder="Email" />
      <input type="password" placeholder="Mot de passe">
    </div>
    
    <p class="inscription">Je n'ai pas de <span>compte</span>. Je m'en <span>crée</span> un.</p>
    <div align="center">
      <button type="submit">Connecter Admin</button>
      <button type="submit">Connecter Parent</button>
    </div>
  </form>
</body>
</html>