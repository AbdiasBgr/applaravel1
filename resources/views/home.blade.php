<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Inscription</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    body{
      display: flex;
      justify-content:center;
      flex-direction: columns;
      align-items: center;
      background-color: #f5f5f5;
      font-family: 'Roboto', sans-serif;
    }
    form {
      margin-top: 20px;
      background-color: #fff;
      padding: 40px 60px;
      border-radius: 10px;
      min-width: 300px;
    } 
    form h1{
      color: #eb7371;
      text-align:center;
    }
    form .social-media{
      margin-top: -10px;
      display: flex;
      flex-wrap:wrap;
      justify-content:center;
    }
    form .social-media p{
      padding: 5px;
      width: 20px;
      margin-left: 10px;
      border-radius: 100%;
      border: 1px solid #545454;
      text-align: center;
      cursor:pointer;
      color: #545454;
    }
    form p.choose-email{
      text-align:center;
    }
    form .inputs {
      display: flex;
      flex-direction: column;
    }
    form .inputs input[type='email'],input[type='text'], input[id='telephone']{
      padding: 15px;
      border:none;
      border-radius: 5px;
      background-color:#f2f2f2;
      outline:none;
      margin-bottom: 10px;
    }
    form p.inscription{
      font-size: 14px;
      margin-bottom: 20px;
      color: #878787;
    }
    form p.inscription span{
      color: #eb7371;
    }
    form button{
      padding: 15px 25px;
      border-radius: 5px;
      border:none;
      font-size: 15px;
      color: #fff;
      background-color: #eb7371;
      outline:none;
      cursor:pointer;
      }
  </style>
</head>
<body>
     <form method="post" action="enregistadmin.php">
      <h1>Formulaire Inscription</h1>
      <div class="social-media">
        <p><i class="fab fa-google"></i></p>
        <p><i class="fab fa-youtube"></i></p>
        <p><i class="fab fa-facebook-f"></i></p>
        <p><i class="fab fa-twitter"></i></p>
      </div>
      <div class="inputs">
        <input type="text" id="nom" name="nom" placeholder="Nom" />
        <input type="text" id="prenom" name="prenom" placeholder="Prenom" />
        <input type="email" id="email" name="email" placeholder="Email" />
        <input type="tel" id="telephone" name="telephone" placeholder="Numéro de telephone">
      </div>
      <p class="inscription">Tu n'es pas <span>inscris</span>. Inscris toi <span>maintenant</span></p>
      <div align="center">
        <button type="submit">S'inscrire</button>
      </div>
    </form>
<body>
</body>
</html>