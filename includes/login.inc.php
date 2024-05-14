<?php
if (isset($_POST['submit'])) {
  //grabbing data
  $uid = $_POST['uid'];
  $pwd = $_POST['pwd'];

  //instantiate
  include '../classes/dbh.classes.php';
  include '../classes/login.classes.php';
  include '../classes/login-contr.classes.php';
  $login = new LoginContr($uid, $pwd);
  
  //running error handler
  $login->loginUser();
  
  //going back to page
  header("location: ../index.php?error=Login successfully");
}