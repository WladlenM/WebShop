<?php
$url = $_SERVER['REQUEST_URI'];
$indexPHPPosition = strpos($url,'index.php');
$baseUrl = substr($url,0,$indexPHPPosition);

$route = null;
$_SESSION['redirectTarget'] = $baseUrl.'index.php';
if(false !== $indexPHPPosition)
{
  $route = substr($url,$indexPHPPosition);
  $route = str_replace('index.php','',$route);
}

$userId = getCurrentUserId();
$countCartItems = countProductsInCart($userId);

if(!$route)
{
  $products = getAllProducts(); #holt allee Produkte
  require __DIR__.'/templates/main.php';
  exit();
}
if(strpos($route, '/Warenkorb/add/') !== false)
{
  $routeParts = explode("/", $route);
  $productId = (int)$routeParts[3];
                                            #fügt ein Produkt dem Warenkorb hinzu wenn auf /Warenkorb/add/ gegangen wird
  addProductToCart($userId,$productId);
  header("Location: ".$baseUrl."index.php");  #man wird auf index zurück geführt
  exit();
}

if(strpos($route, '/Warenkorb/delete/') !== false)
{
  $routeParts = explode("/",$route);
  $productId = (int)$routeParts[3];
                                                  #man löscht ein Produkt aus dem Warenkorb, wenn man auf /Warenkorb/delete/ geht
  deleteProductFromCart($userId, $productId);
  header("Location:".$baseUrl."index.php/Warenkorb"); #man wird zurück zum Warenkorb zurückgeführt
  exit();
}

if(strpos($route, '/Warenkorb') !== false)
{
  $cartItems = getCartItemsForUserId($userId);
  $cartSum = getSummeVonPreis($userId);


  require __DIR__.'/templates/WarenkorbSeite.php';
  exit();
}
if(strpos($route,'/login') !== false)
{
  $isPost = strtoupper($_SERVER['REQUEST_METHOD']) === 'POST';
  $username ="";
  $password ="";
  $errors = [];
  $hasErrors = false;

  if($isPost)
  {
    $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,'password');

    if(false === (bool)$username)
    {
      $errors[]="Benutzername ist leer";    #überprüft ob der benutzername leer ist
    }
    if(false === (bool)$password)
    {
      $errors[]="Passwort ist leer";        #überprüft ob das Passwort leer ist
    }
    $userData = getUserDataForUsername($username);
    if((bool)$username && 0 === count($userData))
    {
      $errors[]="Benutzername existiert nicht";   #überprüft ob der Benutzername existiert
      var_dump($password);
      var_dump($username);
    }
    if((bool)$password &&
    isset($userData['Passwort']) &&
    false === password_verify($password,$userData['Passwort'])
    ){
      $errors[]="Passwort stimmt nicht";    #überprüft ob das Passwort stimmt
    }

    if(0 === count($errors))
    {
      $_SESSION['userId'] = (int)$userData['Kunde_ID'];         #die "Coockie"userId wird mit der angelegten userId überschrieben

      header("Location: ". $_SESSION['redirectTarget']);      #wenn alles richtig ist, wird man zur hauptseite weitergeleitet
      exit();
    }
  }
  $hasErrors = count($errors) > 0;

  require __DIR__.'/templates/login.php';
  exit();
}

if(strpos($route,'/Rechnung') !== false)
{
  if(!isLoggedIn())
  {
    $_SESSION['redirectTarget'] = $baseUrl.'index.php/Rechnung';
    header("Location: ".$baseUrl."index.php/login");
    exit();
  }

  $cartItems = getCartItemsForUserId($userId);
  $cartSum = getSummeVonPreis($userId);
  $userData = getUserData();
  $RechnungData = getRechnungData();


  require __DIR__.'/templates/Rechnung.php';
  exit();
}

if(strpos($route,'/details') !== false)
{
  $routeParts = explode("/", $route);
  $produktId = (int)$routeParts[2];             #zeigt die ProduktId in der Url an
  $products = getSpecificProduct($produktId);   #zeigt das angeklickte Produkt

  require __DIR__.'/templates/details.php';
  exit();
}

if(strpos($route,'/logout') !== false)
{
  session_regenerate_id(true);
  session_destroy();

  header("Location: ".$baseUrl.'index.php/login');
  exit();
}

$_SESSION['redirectTarget'] = $baseUrl.'index.php/'.$route;

if(strpos($route, '/registrieren') !== false)
{
  $db = new mysqli('localhost', 'root', '123456789', 'webshop');    #Datenbank Daten
  if($db->connect_error):
    echo $db->connect_error;
    endif;
if(isset($_POST['registrieren'])):        #fügt die angegebenen Daten in die Datenbank hinzu

  $benutzername = $_POST['username'];
  $vorname = $_POST['vorname'];
  $nachname = $_POST['nachname'];
  $straße = $_POST['straße'];
  $plz = $_POST['plz'];
  $ort = $_POST['ort'];
  $kontonummer = $_POST['kontonummer'];
  $blz = $_POST['blz'];
  $institut = $_POST['institut'];
  $password = password_hash($_POST['passwort'], PASSWORD_DEFAULT);    #hashed das Password


  $sql = "SELECT Kunde_ID from Kunde WHERE username = ?";

  $search_user = $db->prepare($sql);
  $search_user->bind_param('s',$benutzername);
  $search_user->execute();
  $search_result = $search_user->get_result();      #schaut ob der Benutzername vergeben ist

  if($search_result->num_rows == 0):
  #  $passwort = md5($passwort);
    $sql = "INSERT INTO Kunde (username,Vorname,Nachname, Strasse, PLZ, Ort, Kontonummer, BLZ, Institut, Passwort) VALUES (?,?,?,?,?,?,?,?,?,?)";
    $insert = $db->prepare($sql);
    $insert->bind_param('ssssssssss', $benutzername, $vorname, $nachname, $straße,  $plz, $ort, $kontonummer, $blz, $institut, $password);
    $insert->execute();
    if($insert !== false):
      header("Location: ".$baseUrl.'index.php/login');
    endif;
  else:
    echo "Der Benutzername ist schon vergeben";
  endif;

endif;

  require __DIR__.'/templates/registrieren.php';
  exit();
}

if(strpos($route,'/VodkaSeite') !== false)
{

  $products = getAllVodkaProducts();
  require __DIR__.'/templates/VodkaSeite.php';
  exit();
}

if(strpos($route,'/WhiskeySeite') !== false)
{

  $products = getAllWhiskeyProducts();
  require __DIR__.'/templates/WhiskeySeite.php';
  exit();
}

if(strpos($route,'/GinSeite') !== false)
{

  $products = getAllGinProducts();
  require __DIR__.'/templates/GinSeite.php';
  exit();
}

if(strpos($route,'/Bewertung') !== false)
{

  $username = getUserData();
  require __DIR__.'/templates/Bewertung.php';
  exit();
}
