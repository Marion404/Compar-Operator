<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connexion.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Connexion</title>
</head>
<body background="Images/fond.jpg" class="d-flex justify-content-center align-items-center">

    <main class="text-center">
      <form action="index.php" method="POST">
            <img class="mb-4" src="Images/abeille.png" alt="" width="70" height="70">
            <h1 class="h3 mb-3 fw-normal">Connexion</h1>

            <div class="form-floating">
              <input type="text" class="form-control" id="admin" name="admin">
            </div>
            <button class="w-100 btn btn-lg btn-warning" type="submit">Se connecter</button>
            <!--<a href="index.php">Se connecter</a>-->
        </form>
    </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>