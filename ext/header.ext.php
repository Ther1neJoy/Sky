<?php 
session_start();

if (isset($_SESSION["userid"])) {
  $id = $_SESSION["userid"];
  $uid = $_SESSION["useruid"];
}
if (isset($_GET['error'])) {
  $error = $_GET['error'];
  echo '<script type="text/javascript">alert("' . $error . '");';
  echo 'window.history.replaceState({}, document.title, window.location.pathname);</script>';
  $_GET['error'] = '';
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <title>Sky</title>
  </head>
  <body>