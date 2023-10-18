<?php
session_start();
error_reporting(-1);              #Test zur erstellung von einem User
ini_set('display_erros','On');

define('CONFIG_DIR',__DIR__.'/config');

require_once __DIR__.'/function/database.php';

$username = "test2";
$password = password_hash("test",PASSWORD_DEFAULT);

$sql ="INSERT INTO Kunde SET
username='".$username."',
Passwort='".$password."'";

$statement = getDB()->exec($sql);
if(!$statement)
{
  echo printDBErrorMessage();
}
