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
  <h1 class="display-4">Registrierung</h1>
</div>
</div>
</div>
</div>
</div>
</header>
<section class="container" id="LoginForum">

<form action="index.php/registrieren" method="POST">    <!-- schickt die Daten in die Datenbank -->
  <div class="card">

    <div class="card-header">
      Registrieren
    </div>
    <div class="card-body">

      <div class="form-group">
        <label for="username">Username</label>
        <input type="text"  name="username" id="username" class="form-control">
      </div>
      <div class="form-group">
        <label for="passwort">Passwort</label>
        <input type="password" name="passwort" id="passwort" class="form-control">
      </div>
      <div class="form-group">
        <label for="username">Vorname</label>
        <input type="text"  name="vorname" id="vorname" class="form-control">
      </div>
      <div class="form-group">
        <label for="username">Nachname</label>
        <input type="text"  name="nachname" id="nachname" class="form-control">
      </div>
      <div class="form-group">
        <label for="username">Straße</label>
        <input type="text"  name="straße" id="straße" class="form-control">
      </div>
      <div class="form-group">
        <label for="username">Posteitzahl</label>
        <input type="text"  name="plz" id="pzl" class="form-control">
      </div><div class="form-group">
        <label for="username">Ort</label>
        <input type="text"  name="ort" id="ort" class="form-control">
      </div>
      <div class="form-group">
        <label for="username">Kontonummer</label>
        <input type="text"  name="kontonummer" id="kontonummer" class="form-control">
      </div>
      <div class="form-group">
        <label for="username">BLZ</label>
        <input type="text"  name="blz" id="blz" class="form-control">
      </div>
      <div class="form-group">
        <label for="username">Institut</label>
        <input type="text"  name="institut" id="institut" class="form-control">
      </div>
    </div>
  </div>
<div class="card-footer">
  <button class="btn btn-secondary" type="submit" name="registrieren" value="registrieren">Registrieren</button>
</div>
</form>
</section>

<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
