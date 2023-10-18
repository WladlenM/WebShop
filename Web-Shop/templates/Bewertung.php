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
  <h1 class="display-4">Bewertungen</h1>
</div>
</div>
</div>
</div>
</div>
</header>
<section class="container" id="Bewertung">

<form method="POST" action="index.php/Bewertung">
  <?= $username['username']; ?>
  <hr class="col-7">

  <!-- 1. Stern -->
  <span class="star active" style="width:250px; margin:0px">
  <span class="spacer">&nbsp;</span>
   <!-- 2. Stern -->
   <span class="star active" style="width:200px;">
   <span class="spacer">&nbsp;</span>
    <!-- 3. Stern -->
    <span class="star active" style="width:150px;">
    <span class="spacer">&nbsp;</span>
     <!-- 4. Stern -->
     <span class="star" style="width:100px;">
     <span class="spacer">&nbsp;</span>
      <!-- 5. Stern -->
      <span class="star" style="width:50px;">
      <span class="spacer">&nbsp;</span>
      <!-- 5. Stern Ende-->
      </span>
     <!-- 4. Stern Ende-->
    </span>
    <!-- 3. Stern Ende-->
   </span>
   <!-- 2. Stern Ende-->
   </span>
  <!-- 1. Stern Ende-->
  </span>

  <div class="form-group col-7">
    <label for="exampleFormControlTextarea1"></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <input name="submit" type="submit" value="Abschicken">
  </div>
</form>

</section>

<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
