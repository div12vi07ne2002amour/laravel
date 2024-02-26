<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARAVEL CRUD</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col ≤12">
        <h1> AJOUTER UN ETUDIANT </h1>
        <hr>
        @if (session('status'))
        <div class="alert alert-succes">
          {{session('status') }}
        </div>
        @endif
        <ul>
          @foreach($errors->all() as $error)
          <li class="alert alert-danger"> {{$error}}</li>
          @endforeach
        </ul>
        <form action="/ajouter/traitement" method="POST" class="form-group">
          @csrf
          <div class="form-group">
            <label for="Nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="Nom" name="nom">
          </div>
          <div class="form-group">
            <label for="Prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="Prenom" name="prenom">
          </div>
          <div class="form-group">
            <label for="Tel" class="form-label">Tel</label>
            <input type="text" class="form-control" id="Tel" name="tel">
          </div>
          <div class="form-group">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" id="Email" name="email">
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Confirmer</button>
          <br>
          <a href="/etudiant" class="btn btn-danger"> Revenir à la liste des étudiants</a>
          <br/>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>