<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARAVEL CRUD</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="container text-center">
    <div class="row">
      <div class="col ≤12">
        <h1> LARAVEL CRUD </h1>
        
        <div class="row">
          <div class="col-md-3">
            <h3 href="/ajouter" class="table">Liste des Etudiants</h3>
          </div>
        
          <div class="col-md-4 offset-md-2">
            <a href="/ajouter" class="btn btn-primary">Ajouter un Etudiant</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <table class="table container-sm table-bordered ">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Tel</th>
        <th scope="col">Email</th>
        <th scope="col">Modifier</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Fall</td>
        <td>Darro</td>
        <td>788694531</td>
        <td>fall@gmail.com</td>
        <td> <a href="ID" class="btn btn-primary btn-sm w-100">Edit</a></td>
        <td><a href="ID" class="btn btn-danger">Supprimer</a></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>GUEYE</td>
        <td>Idrissa</td>
        <td>788694532</td>
        <td>gueye@gmail.com</td>
        <td> <a href="ID" class="btn btn-primary btn-sm w-100">Edit</a></td>
        <td><a href="ID" class="btn btn-danger">Supprimer</a></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>SECK</td>
        <td>Mohammed</td>
        <td>788694533</td>
        <td>seck@gmail.com</td>
        <td> <a href="ID" class="btn btn-primary btn-sm w-100">Edit</a></td>
        <td><a href="ID" class="btn btn-danger">Supprimer</a></td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>DIOP</td>
        <td>Marième</td>
        <td>788694534</td>
        <td>diop@gmail.com</td>
        <td> <a href="ID" class="btn btn-primary btn-sm w-100">Edit</a> </td>
        <td><a href="ID" class="btn btn-danger">Supprimer</a></td>
      </tr>
    </tbody>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>