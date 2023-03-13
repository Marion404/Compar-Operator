<?php
include 'utils/connexion_bdd.php';
session_start();

$location = $_GET['destination'];

$stmt = $dbh->prepare("SELECT * FROM destination d JOIN tour_operator t ON d.tour_operator_id = t.id WHERE d.location = ?");
$stmt->execute([$location]);
$datas = $stmt->fetchAll();

$stmtReview = $dbh->prepare("SELECT DISTINCT message FROM destination d JOIN tour_operator t ON d.tour_operator_id = t.id JOIN review r ON t.id = r.tour_operator_id WHERE t.id = ?");

?>

<?php include('partials/header.php'); ?>
<?php include('partials/navbar.php'); ?>

  </head>
  <body>
  <?php
  foreach($datas as $data) {
    ?>
  <div class="row mb-2 justify-content-center">
      <!-- Colonne 1-->
      <div class="col-md-5 m-2">
        <div
          class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
        >
          <div class="col d-none d-lg-block">
            <img src="images/<?= $data['image']?>" class="m-2" style="width:250px; height:200px">

            <div class="border border-3 text-center m-2">Note: <?= $data['grade_total']?></div>
            <div class="border border-3 text-center m-2" style="font-size:14px">Avis: <?php $stmtReview->execute([$data['tour_operator_id']]); 
                                                                    $reviews = $stmtReview->fetchAll(); 
                                                                    foreach($reviews as $review) { 
                                                                        echo "<p class='border border-1'>" . $review['message'] . '</p><br>';
                                                                    }?></div>
          </div>
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success text-center"
              ><?= $location ?></strong
            >
            <h3 class="mb-0 border border-2 text-center p-2"><?= $data['price']?></h3>
            <p class="mb-auto"></p>
            <a href="#" class="stretched-link d-flex align-content-end"
              ><?= $data['link']?></a
            >
          </div>
        </div>
      </div>
      
    </div>
<?php
  }
  ?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    
    
    <?php include('partials/footer.php'); ?>
  

