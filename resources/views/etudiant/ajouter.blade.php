<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Liste des Inscrits</title>
  </head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    body{
      display: flex;
      justify-content:center;
      flex-direction: columns;
      align-items: center;
      background-color: #f5f5f5;
      font-family: 'Roboto', sans-serif;
       background: linear-gradient(to right, rgb(155, 136, 136), rgb(212, 163, 71));
    }
    form {
      margin-top: 20px;
      background-color: #fff;
      padding: 40px 60px;
      border-radius: 10px;
      min-width: 300px;
      width: 430px;
    } 
    form h3{
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
      width: 40px;
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
      .re{
    padding: 15px 25px;
      border-radius: 5px;
      border:none;
      font-size: 15px;
      color: #fff;
      background-color: #eb7371;
      outline:none;
      cursor:pointer;
      text-decoration: none;
      }
      .al{
        margin-left: 30px;
        margin-top: 10px;
      }
  </style>
</head>
<body>
  
  
  <form action="/ajouter/traitement" method="POST">
    <h3>Formulaire Inscription</h3>
    @if (session('status'))
          <div class="alert alert-success al">
            {{ session('status') }}
          </div>
    @endif
    <ul>
      @foreach ($errors->all() as $error)
        <li class="alert alert-danger"> {{ $error }}</li>
      @endforeach
    </ul>
   @csrf
       <br>
      <div class="social-media">
        <p><i class="fab fa-google"></i></p>
        <p><i class="fab fa-youtube"></i></p>
        <p><i class="fab fa-facebook-f"></i></p>
        <p><i class="fab fa-twitter"></i></p>
      </div>
      <div class="inputs">
          <input type="text" id="Nom" name="nom" placeholder="Nom" />
          <input type="text" id="Prenom" name="prenom" placeholder="Prenom" />
          <input type="email" id="Email" name="email" placeholder="Email" />
          <input type="text" id="Telephone" name="telephone" placeholder="Numéro de telephone">
      </div>
      <p class="inscription">Tu n'es pas <span>inscris</span>. Inscris toi <span>maintenant</span></p>
      <div align="center">
        <button type="submit">S'inscrire</button>
        <a href="/etudiant" class="btn btn-danger re">Revenir à la Liste</a>
      </div>
    </form>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>