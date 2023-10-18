<div class="card">
  <div class="card-title"><?= $product['Produktname'] ?></div>
  <?php
  if ($product['Produktname'] == "Absolut Vodka") {
    echo '<img src="Bilder/Absolut_A_Drop_of_Love_Mint_1280x1280.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($product['Produktname'] == "Russian Standard") {
    echo '<img src="Bilder/Russian-Standard_Vodka_Flasche551e707e939d0_1280x1280.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($product['Produktname'] == "Smirnoff Vodka") {
    echo '<img src="Bilder/Smirnoff_Red_1280x1280.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($product['Produktname'] == "Beluga Vodka") {
    echo '<img src="Bilder/Beluga_Noble_Vodka_0-7_Liter.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($product['Produktname'] == "Grey Goose") {
    echo '<img src="Bilder/Grey_Goose_Vodka_3Liter_1280x1280.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($product['Produktname'] == "Belvedere") {
    echo '<img src="Bilder/Belvedere_Vodka_0-7_Liter_Flasche_1280x1280.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($product['Produktname'] == "Sky Vodka") {
    echo '<img src="Bilder/Skyy_Vodka_1_LiteruxWoQFlGDtoX8_1280x1280.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($product['Produktname'] == "Jack Daniel´s") {
    echo '<img src="Bilder/Jack_Daniels_Metalltube_1280x1280.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($product['Produktname'] == "Jim Beam Bourbon") {
    echo '<img src="Bilder/jim-beam-white.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($product['Produktname'] == "Chivas Regal 12") {
    echo '<img src="Bilder/chivas-regal-12-years.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($product['Produktname'] == "Bombay Sapphire") {
    echo '<img src="Bilder/bombay-sapphire.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($product['Produktname'] == "Hendrick´s Gin") {
    echo '<img src="Bilder/Hendricks Gin.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($product['Produktname'] == "Gordon´s") {
    echo '<img src="Bilder/gordons-1l.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  if ($product['Produktname'] == "Tanqueray") {
    echo '<img src="Bilder/tanqueray-london-dry-gin.jpg" class="card-img-top" alt="produkt" width="auto" height="200">';
  }
  ?>
  <div class="card-body">
<?= $product['Beschreibung'] ?>
<hr>
<?= $product['Preis']?> €
  </div>
  <div class="card-footer">
    <a href="index.php/details/<?= $product['Produkt_ID']?>" class="btn btn-primary btn-sm">Details</a> <!-- Führt zu den Details -->
    <a href="index.php/Warenkorb/add/<?= $product['Produkt_ID']?>" class="btn btn-success btn-sm">In den Warenkorb</a>  <!-- Fügt ein Produkt dem Warenkrob hinzu -->
  </div>
</div>
