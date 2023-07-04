<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Inscrits</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/stylA.css')}}">
    <style>
body {
    font-family: "Open Sans", sans-serif;
    line-height: 1.25;
  }
  table {
    border: 1px solid #ccc;
    border-collapse: collapse;
    table-layout: fixed;
    width: 100%;
  }
  table caption {
    font-size: 1.5em;
    margin: .5em 0 .75em;
    background-color: red;
    width: 300px;
    color: #fff;
    margin-left: 500px;
    border-radius: 5px;
    height: 30px;
  }
  table tr {
    border: 1px solid #ddd;
    padding: .35em;
  }
  table tr:nth-child(even) {
    background: #f8f8f8;  
  }
  table th,
  table td {
    padding: .625em;
    text-align: left;
  }
  table th {
    background: #999;
    color: #fff;
    font-size: .85em;
    letter-spacing: .1em;
    text-transform: uppercase;
  }
  table td {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
</style>
</head>
<body>
<table>
  <caption>LISTE DES INSCRITS</caption>
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prénom(s)</th>
      <th scope="col">Email</th>
      <th scope="col">Téléphone</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>Bogre</td>
        <td>Abdias</td>
        <td>abdiasbgr@gmail.com</td>
        <td>76427283</td>
    </tr>
  </tbody>
</table>
</body>
</html> 
     <script src="{{ asset('js/bootstrap.min.css')}}"></script>
</body>

</html>