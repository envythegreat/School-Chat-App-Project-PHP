<?php
//ini_set('display_errors', 'On');
//define('host', '127.0.0.1');
//define('dbName', 'chat');
//define('username', 'root');
//define('passowrd', '');
try{
//  $db = new PDO('mysql:host='.host.';dbname='.dbName,username,passowrd);
  $db = new PDO('mysql:host=127.0.0.1;dbname=appchat','root','');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
  echo $e->getMessage();
  die();
}
?>
