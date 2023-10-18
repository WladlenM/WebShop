<!DOCTYPE html>
<html lang="de">
<head>
  <title>Web-Shop</title>
  <base href="/Web-Shop/">
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
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
  <h1 class="display-4">Rechnung</h1>
</div>
</div>
</div>
</div>
</div>
</header>
<section class="container" id="LoginForum">

  <div class="card">

    <div class="card-header">
      Rechnung
    </div>
    <div class="card-body">

      <div class="form-group">
        <label for="username">Produkte</label>

      </div>
      <?php foreach ($cartItems as $cartItem):?>
      <div class="row cartItem">
        <?php include __DIR__.'/RechnungProdukte.php';?>
      </div>
      <?php endforeach;?>
      <hr>
      <div class="form-group">
        <label for="username">Gesamtpreis</label>
      </div>
      <br>
      <?=  $cartSum ?> €
      <hr>
      <div class="form-group">
        <label for="passwort">Vorname</label>

      </div>
      <br>
      <?= $userData['Vorname'] ?>

      <hr>
      <div class="form-group">
        <label for="username">Nachname</label>

      </div>
      <br>
      <?= $userData['Nachname']?>
      <hr>
      <div class="form-group">
        <label for="username">Straße</label>

      </div>
      <br>
      <?= $userData['Strasse'] ?>
      <hr>
      <div class="form-group">
        <label for="username">Posteitzahl</label>

      </div>
      <br>
      <?= $userData['PLZ'] ?>
      <hr>
      <div class="form-group">
        <label for="username">Ort</label>

      </div>
      <br>
      <?= $userData['Ort'] ?>

      <hr>
      <div class="form-group">
        <label for="username">Datum</label>

      </div>
      <br>
      <?=  $RechnungData['Datum']?>
      <hr>
      <div class="form-group">
        <label for="username">Uhrzeit</label>
      </div>
      <br>
      <?= $RechnungData['Uhrzeit'] ?>
    </div>
  </div>
  <a href="index.php/Bewertung" class="btn btn-primary text-center col-4">Bitte bewerten Sie Unseren Web Shop</a>
</section>
<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
