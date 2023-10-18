<?php

function getAllProducts() #holt alle Produkte aus der Tabelle Produkt
{
  $sql ="SELECT Produkt_ID,Produktname,Beschreibung,Preis from produkt";

  $result = getDB()->query($sql);
  if(!$result)
  {
    return [];
  }
  $products = [];
  while($row = $result ->fetch())
  {
    $products[]=$row;
  }
  return $products;
}

function getSpecificProduct(int $produktId):array
{

  $sql ="SELECT Produkt_ID, Produktname, Beschreibung, Preis, Hersteller_Name, Web, eMail       #holt ein bestimmtes produkt/ holt das Produkt auf dem man in Details angecklickt hat
  From produkt, hersteller
  WHERE produkt.H_ID = hersteller.Hersteller_ID
  AND Produkt_ID = ".$produktId;

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

function getAllVodkaProducts()    #holt alle Vodka Produkte
{
  $sql = "SELECT Produkt_ID, Produktname, Beschreibung, Preis, PK_ID
  From Produkt
  Where PK_ID = 1";
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

function getAllWhiskeyProducts()    #holt alle Whiskey Produkte
{
  $sql = "SELECT Produkt_ID, Produktname, Beschreibung, Preis, PK_ID
  From Produkt
  Where PK_ID = 2";
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

function getAllGinProducts()    #holt alle Gin Produkte
{
  $sql = "SELECT Produkt_ID, Produktname, Beschreibung, Preis, PK_ID
  From Produkt
  Where PK_ID = 3";
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
