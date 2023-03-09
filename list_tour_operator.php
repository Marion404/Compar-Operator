<?php
include 'utils/connexion_bdd.php';
session_start();

$location = $_GET['destination'];

$stmt = $dbh->prepare("SELECT * FROM destination d JOIN tour_operator t ON d.tour_operator_id = t.id WHERE d.location = ?");
$stmt->execute([$location]);
$datas = $stmt->fetchAll();

var_dump($datas);
 
  foreach($datas as &$tourOperator) { 
    echo '<li>' .  $tourOperator['name'] . '</li>';
    
  }
?>

