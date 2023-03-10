<?php 

session_start();

if(empty($_POST)) {

}

if(!empty($_SESSION['admin'])) {
} else {
  $_SESSION['admin'] = $_POST['admin'];

}

if(empty($_SESSION['admin'])) {
  header("Location: connexion.php");
  session_destroy();
}



/*session is started if you don't write this line can't use $_Session  global variable*/




?>


<?php include('partials/header.php'); ?>

<body>
<?php include('partials/navbar.php'); ?>
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

  <?php include('partials/footer.php'); ?>
  