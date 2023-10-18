<?php
function addProductToCart(int $userId, int $productId)    #fügt ein Produkt für ein User dem Warenkorb hinzu
{
  $sql ="INSERT INTO Warenkorb SET Anzahl=1, K_ID = :userId, P_ID = :productId
  ON DUPLICATE KEY UPDATE Anzahl = ANZAHL + 1";
  $statement = getDB()->prepare($sql);

  $statement->execute([
    ':userId'=>$userId ,
    ':productId'=>$productId
  ]);
}

function countProductsInCart(int $userId)   #zählt die Anzahl der Produkte im Warenkorb für einen User
{
  $sql ="SELECT SUM(Anzahl) FROM Warenkorb WHERE K_ID =".$userId;
  $cartResults = getDB()->query($sql);
  if($cartResults === false)
  {
    var_dump(printDBErrorMessage());
    return 0;
  }
  $cartItems = $cartResults->fetchColumn();
  return $cartItems;
}

function getCartItemsForUserId(int $userId):array
{
  $sql ="SELECT P_ID, Produktname, Beschreibung, Preis * Anzahl as Preis, Anzahl      #holt dei Warenkorbitems für einen User
  From Warenkorb
  JOIN Produkt ON(Warenkorb.P_ID = Produkt_ID)
  WHERE K_ID = ".$userId;
  $results = getDB()->query($sql);
  if($results === false)
  {
    return[];
  }
  $found = [];
  while ($row = $results->fetch())
  {
    $found[]=$row;
  }

  return $found;
}

function getSummeVonPreis(int $userId){     #berechnet die Summe
  $sql ="SELECT SUM(Preis * Anzahl)
  From Warenkorb
  JOIN Produkt ON(Warenkorb.P_ID = Produkt_ID)
  WHERE K_ID =".$userId;
  $result = getDB()->query($sql);
  if($result === false){
    return 0;
  }
  return $result->fetchColumn();
}

function deleteProductFromCart(int $userId, int $productId)     #löscht ein Produkt aus dem Warenkorb
{
  $sql ="DELETE FROM Warenkorb where K_ID = :userId and P_ID = :productId";
  $statement = getDB()->prepare($sql);

  $statement->execute([
    ':userId'=>$userId ,
    ':productId'=>$productId
  ]);
}
