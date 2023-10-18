<!DOCTYPE html>
<html lang="de">
<head>
  <title>Web-Shop</title>
  <base href="/Web-Shop/">
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include __DIR__.'/navbar.php'?>
<header>
  <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('Bilder/alcohol-drinks-drink-beach.jpg');
      height: 250px; max-width: 100%; background-size: cover; background-position: 0px 700px;
    ">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
      <div class="text-white">
<div class="container">
  <h1 class="display-4">Warenkorb</h1>
</div>
</div>
</div>
</div>
</div>
</header>
<section class="container" id="cartItems">
  <div class="row cartItemHeader">
    <div class="col-11 text-right">
      Preis
    </div>
    <div class="col-1 text-right">
      Anzahl
    </div>
  </div>
  <?php foreach ($cartItems as $cartItem):?>
  <div class="row cartItem">
    <?php include __DIR__.'/WarenkorbItem.php';?>
  </div>
  <?php endforeach;?>
    <div class="text-right">
    Summe (<?= $countCartItems ?> Artikel): <?= $cartSum?> €
  </div>
  <br>
  <div class="row col-12">
    <a href="index.php/Rechnung" class="btn btn-primary text-center">Bezahlen<?php
    $sql = "INSERT INTO rechnung (Datum,Uhrzeit,K_ID)
    VALUES (DATE_FORMAT(NOW(), '%Y-%m-%d'), DATE_FORMAT(NOW(), '%H:%i:%S'), :userId)";

    $statement = getDB()->prepare($sql);
    if(false === $statement)
    {
      return [];
    }
    $statement->execute([
      ':userId'=>getCurrentUserId()         #Erstellt eine Rechung durch klicken auf den Button/ aktuelles Datum und Uhrzeit wird eingefügt und der aktuelle User
    ]);
    if(0 === $statement->rowCount())
    {
      return [];
    }
    $row = $statement->fetch();
    return $row;
    ?>
    </a>
</div>
</section>
<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
