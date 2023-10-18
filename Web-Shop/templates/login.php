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
  <h1 class="display-4">Login</h1>
</div>
</div>
</div>
</div>
</div>
</header>
<section class="container" id="LoginForum">

<form action="index.php/login" method="POST">
  <div class="card">

    <div class="card-header">
      Login
    </div>
    <div class="card-body">
      <?php if($hasErrors):?>
      <div class="alert alert-danger" role="alert">
        <?php foreach ($errors as $errorMessage):?>
            <p><?= $errorMessage?></p>
        <?php endforeach?>
      </div>
    <?php endif;?>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" value="<?=$username?>"  name="username" id="username" class="form-control">
      </div>
      <div class="form-group">                  <!-- kontrolliert die Daten -->
        <label for="password">Passwort</label>
        <input type="password" value="<?=$password?>" name="password" id="password" class="form-control">
      </div>
    </div>
    <div class="card-footer">
      <button class="btn btn-success" type="submit">Login</button>
    </div>
  </div>
</form>
<form action="index.php/registrieren" method="POST">
  <button class="btn btn-secondary">Registrieren</button>
</form>
</section>

<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
