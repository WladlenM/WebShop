<?php

function getCurrentUserId()   #holt die aktuell benutze UserId
{
  $userId = random_int(0,time());
  if(isset($_COOKIE['userId']))
  {
    $userId = (int) $_COOKIE['userId'];
  }
  if(isset($_SESSION['userId']))
  {
    $userId = (int) $_SESSION['userId'];
  }
  return $userId;
}
function getUserDataForUsername(string $username):array
{
  $sql ="SELECT Kunde_ID,Passwort                                 #holt die Bentuzerinformationen fürs login
  from Kunde
  where username=:username";

  $statement = getDB()->prepare($sql);
  if(false === $statement)
  {
    return [];
  }
  $statement->execute([
    ':username'=>$username
  ]);
  if(0 === $statement->rowCount())
  {
    return [];
  }
  $row = $statement->fetch();
  return $row;
}

function isLoggedIn():bool
{
  return isset($_SESSION['userId']);        #kontrolliert, ob der user eingelogt ist
}

function getUserData()      #holt alle Benutzerinformationen
{
  $sql = "SELECT Kunde_ID, username, Vorname, Nachname, Strasse, PLZ, Ort
  from Kunde
  where Kunde_ID=:userId";

  $statement = getDB()->prepare($sql);
  if(false === $statement)
  {
    return [];
  }
  $statement->execute([
    ':userId'=>getCurrentUserId()
  ]);
  if(0 === $statement->rowCount())
  {
    return [];
  }
  $row = $statement->fetch();
  return $row;
}

function getRechnungData()    #holt die Rechnungsinformationen
{
  $sql = "SELECT Rechnung_ID, Datum, Uhrzeit, K_ID
  from Rechnung
  where K_ID=:userId order by Rechnung.Rechnung_ID DESC";

  $statement = getDB()->prepare($sql);
  if(false === $statement)
  {
    return [];
  }
  $statement->execute([
    ':userId'=>getCurrentUserId()
  ]);
  if(0 === $statement->rowCount())
  {
    return [];
  }
  $row = $statement->fetch();
  return $row;
}
