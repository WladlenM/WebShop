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
      height: 350px; max-width: 100%; background-size: cover; background-position: 0px 700px;
    ">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
      <div class="text-white">
<div class="container">
  <h1 class="display-4">Willkommen auf meinem Online Shop</h1>
</div>
</div>
</div>
</div>
</div>
</header>
<section class="container" id="products">
  <div class="row">
    <?php foreach ($products as $product):?>
    <div class="col">
      <?php include 'card.php'?>    <!-- zeigt nur die Vodka Produkte an -->
    </div>
  <?php endforeach;?>
</div>
</section>
<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
