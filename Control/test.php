<?php
session_start();
require_once('function.php');
if ( isset($_POST['sender']) && isset($_POST['receiver']) && isset($_POST['messageUs']) ) {
  $sender = $_POST['sender'];
  $receiver = $_POST['receiver'];
  $message = $_POST['messageUs'];
  insertMessage($sender, $receiver, $message);
}
if (isset($_GET['gSender']) && isset($_GET['gReceiver'])) {
  $gSender = $_GET['gSender'];
  $gReceiver = $_GET['gReceiver'];
  messageList($gSender,$gReceiver);
}
if (isset($_GET['SenderUsername']) && isset($_GET['colorBg'])) {
  $msgUser = $_GET['SenderUsername'];
  $BgColor = $_GET['colorBg'];
  updateBgColor($BgColor, $msgUser);
  
}