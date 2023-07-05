<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des Inscrits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <style>
        h1{
            background-color: blue;
            color: whitesmoke;
            border-radius: 10px;
        }
         body {
            background: linear-gradient(to right, rgb(155, 136, 136), rgb(212, 163, 71));
        } 
     </style>  
</head>
  <body>

      <div class="container text-center">

          <div class="row">

              <div class="col s12">
                  <h1> Liste des Inscrits </h1>
                        <hr>
                        <a href="/ajouter" class="btn btn-primary"> Ajouter un Etudiant </a>
                        <hr>
                        @if (session('status'))
                            <div class="alert alert-success al">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Prenom </th>
                                    <th>adresse-email</th>
                                    <th>Telephone</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $ide = 1;
                                @endphp
                                
                                @foreach ($etudiants as $etudiant)
                                <tr>
                                    <td>{{ $ide }}</td>
                                    <td>{{ $etudiant->nom }}</td>
                                    <td>{{ $etudiant->prenom }}</td>
                                    <td>{{ $etudiant->email }}</td>
                                    <td>{{ $etudiant->telephone }}</td>
                                    <td>
                                        <a href="/modifier-etudiant/{{ $etudiant->id }}" class="btn btn-info">Modifier</a>
                                        <a href="/supprimer-etudiant/{{ $etudiant->id }}" class="btn btn-primary">Supprimer</a>
                                    </td>
                                </tr>
                                @php
                                    $ide += 1;
                                @endphp
                                @endforeach
                            </tbody>
                             
                        </table>
                        {{ $etudiants->links() }}
                </div>
                 
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>