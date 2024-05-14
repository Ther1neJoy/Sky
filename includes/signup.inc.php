<?php
if (isset($_POST['submit'])) {
  //grabbing data
  $uid = $_POST['uid'];
  $pwd = $_POST['pwd'];
  $pwdRepeat = $_POST['pwdRepeat'];
  $email = $_POST['email'];

  //instantiate
  include '../classes/dbh.classes.php';
  include '../classes/signup.classes.php';
  include '../classes/signup-contr.classes.php';
  $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);
  
  //running error handler
  $signup->signupUser();
  
  //going back to page
  header("location: ../index.php?error=Signup Successfully");
}