<div class="col-3">
  <?php
  if ($cartItem['Produktname'] == "Absolut Vodka") {
    echo '<img class="productPicture" src="Bilder/Absolut_A_Drop_of_Love_Mint_1280x1280.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($cartItem['Produktname'] == "Russian Standard") {
    echo '<img class="productPicture" src="Bilder/Russian-Standard_Vodka_Flasche551e707e939d0_1280x1280.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($cartItem['Produktname'] == "Smirnoff Vodka") {
    echo '<img class="productPicture" src="Bilder/Smirnoff_Red_1280x1280.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($cartItem['Produktname'] == "Beluga Vodka") {
    echo '<img class="productPicture" src="Bilder/Beluga_Noble_Vodka_0-7_Liter.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($cartItem['Produktname'] == "Grey Goose") {
    echo '<img class="productPicture" src="Bilder/Grey_Goose_Vodka_3Liter_1280x1280.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($cartItem['Produktname'] == "Belvedere") {
    echo '<img class="productPicture" src="Bilder/Belvedere_Vodka_0-7_Liter_Flasche_1280x1280.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($cartItem['Produktname'] == "Sky Vodka") {
    echo '<img class="productPicture" src="Bilder/Skyy_Vodka_1_LiteruxWoQFlGDtoX8_1280x1280.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($cartItem['Produktname'] == "Jack Daniel´s") {
    echo '<img class="productPicture" src="Bilder/Jack_Daniels_Metalltube_1280x1280.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($cartItem['Produktname'] == "Jim Beam Bourbon") {
    echo '<img class="productPicture" src="Bilder/jim-beam-white.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($cartItem['Produktname'] == "Chivas Regal 12") {
    echo '<img class="productPicture" src="Bilder/chivas-regal-12-years.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($cartItem['Produktname'] == "Bombay Sapphire") {
    echo '<img class="productPicture" src="Bilder/bombay-sapphire.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($cartItem['Produktname'] == "Hendrick´s Gin") {
    echo '<img class="productPicture" src="Bilder/Hendricks Gin.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($cartItem['Produktname'] == "Gordon´s") {
    echo '<img class="productPicture" src="Bilder/gordons-1l.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($cartItem['Produktname'] == "Tanqueray") {
    echo '<img class="productPicture" src="Bilder/tanqueray-london-dry-gin.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  ?>
</div>
<div class="col-7">
  <div><?= $cartItem['Produktname']?></div>
  <div><?= $cartItem['Beschreibung']?></div>
  <a href="index.php/Warenkorb/delete/<?= $cartItem['P_ID']?>" class="btn btn-danger btn-sm">Entfernen</a>
</div>
<div class="col-1 text-right">
  <span class="price"><?= $cartItem['Preis']?> €
</div>
<div class="col-1 text-right">
  <?= $cartItem['Anzahl']?>
</div>
