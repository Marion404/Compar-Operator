<?php 

session_start();

$_SESSION['admin'] = $_POST['admin'];

if(empty($_SESSION['admin'])) {
  header("Location: connexion.php");
  session_destroy();
}



/*session is started if you don't write this line can't use $_Session  global variable*/



echo "Identifiant de connexion " . $_SESSION['admin'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Wingz</title>
      <!-- <div class="header__content">
        <div class="header__logo-container">
          <div class="header__logo-img-cont">
            <img id="abeille" src="images/abeille.png" />
          </div>
          <a href="./"><span class="header__logo-sub" onmouseover="this.style.color='yellow'" onmouseout="this.style.color='black'">Wingz</span></a>
        </div>
        <div class="header__main">
          <ul class="header__links">
            <li class="header__link-wrapper">
              <a href="./" class="header__link" onmouseover="this.style.color='yellow'" onmouseout="this.style.color='black'"> Vols </a>
            </li>
            <li class="header__link-wrapper">
              <a href="./#about" class="header__link" onmouseover="this.style.color='yellow'" onmouseout="this.style.color='black'"> Hôtels </a>
            </li>
            <li class="header__link-wrapper">
              <a href="./#projects" class="header__link" onmouseover="this.style.color='yellow'" onmouseout="this.style.color='black'"> Voiture </a>
            </li>
            <li class="header__link-wrapper">
              <a href="./#contact" class="header__link" onmouseover="this.style.color='yellow'" onmouseout="this.style.color='black'"> Devise </a>
            </li>
          </ul>
        </div>
      </div> -->


</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <img src="Images/abeille.png" style="width: 105px"/>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><h1>Wingz</h1></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Vols</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Véhicules</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Hôtels</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Wingz</h1>
          <p class="lead text-muted">Butinez les meilleurs prix pour vos voyages !</p>
          <p>
            <!--<a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a> -->
          </p>
        </div>
      </div>
    </section>
  
    <div class="album py-5 bg-light">
      <div class="container">
  
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">
          <div class="col">
            <div class="card shadow-sm">
              <img src="Images/bangkok thailand.jpg" style="width: 100%;";>
              <div class="card-body">
                <p class="card-text">Bangkok, Thailande</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Note</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Prix</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Reviews</button>
                    <a href="list_tour_operator.php?destination=Bangkok" class="btn btn-sm btn-outline-secondary">Voir</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="Images/boston usa.jpg" style="width: 100%;";>
              <div class="card-body">
                <p class="card-text">Boston, USA</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Note</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Prix</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Reviews</button>
                    <a href="list_tour_operator.php?destination=Boston" class="btn btn-sm btn-outline-secondary">Voir</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="Images/braga portugal.jpg" style="width: 100%;";>
              <div class="card-body">
                <p class="card-text">Braga, Portugal</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Note</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Prix</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Reviews</button>
                    <a href="list_tour_operator.php?destination=Braga" class="btn btn-sm btn-outline-secondary">Voir</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card shadow-sm">
              <img src="Images/bubaque bijagos.jpg" style="width: 100%;";>
              <div class="card-body">
                <p class="card-text">Bubaque, Guinée-Bissau</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Note</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Prix</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Reviews</button>
                    <a href="list_tour_operator.php?destination=Bubaque" class="btn btn-sm btn-outline-secondary">Voir</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="Images/hong kong.jpg" style="width: 100%;";>
              <div class="card-body">
                <p class="card-text">Hong Kong, Chine</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Note</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Prix</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Reviews</button>
                    <a href="list_tour_operator.php?destination=Hong Kong" class="btn btn-sm btn-outline-secondary">Voir</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="Images/kathmandu nepal.jpg" style="width: 100%;";>
              <div class="card-body">
                <p class="card-text">Katmandou, Népal</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Note</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Prix</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Reviews</button>
                    <a href="list_tour_operator.php?destination=Katmandu" class="btn btn-sm btn-outline-secondary">Voir</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card shadow-sm">
              <img src="Images/kiosque a musique st etienne france.jpg" style="width: 100%;";>
              <div class="card-body">
                <p class="card-text">Saint Etienne, France</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Note</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Prix</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Reviews</button>
                    <a href="list_tour_operator.php?destination=Saint Etienne" class="btn btn-sm btn-outline-secondary">Voir</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="Images/lisbonne portugal.jpg" style="width: 100%;";>
              <div class="card-body">
                <p class="card-text">Lisbonne, Portugal</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Note</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Prix</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Reviews</button>
                    <a href="list_tour_operator.php?destination=Lisbonne" class="btn btn-sm btn-outline-secondary">Voir</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="Images/port grimaud france.jpg" style="width: 100%;";>
              <div class="card-body">
                <p class="card-text">Port Grimaud, France</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Note</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Prix</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Reviews</button>
                    <a href="list_tour_operator.php?destination=Port Grimaud" class="btn btn-sm btn-outline-secondary">Voir</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 </form>
 
 </div>


</body>
</html>  
</body>
</html>