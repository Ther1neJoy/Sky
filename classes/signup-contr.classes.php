<?php
class SignupContr extends Signup{
  private $uid;
  private $pwd;
  private $pwdRepeat;
  private $email;
  
  public function __construct ($uid, $pwd, $pwdRepeat, $email){
    $this->uid = $uid;
    $this->pwd = $pwd;
    $this->pwdRepeat = $pwdRepeat;
    $this->email = $email;
  }
  //Method that allows us to signup user
  public function signupUser(){
    if ($this->emptyInput() == false) {
      header("location: ../index.php?error=emptyfeild");
      exit();
    }
    if ($this->invalidUid() == false) {
      header("location: ../index.php?error=invalidUid");
      exit();
    }
    if ($this->invalidEmail() == false) {
      header("location: ../index.php?error=invalidEmail");
      exit();
    }
    if ($this->pwdMatch() == false) {
      header("location: ../index.php?error=pwdMatch");
      exit();
    }
    if ($this->uidTakenCheck() == false) {
      header("location: ../index.php?error=uidTakenCheck");
      exit();
    }
    $this->setUser($this->uid, $this->pwd, $this->email);
  }
  
  
  /*
  controls for error handler
  */
  //control check empty feilds
  private function emptyInput(){
    $result;
    if (empty($this->uid)||empty($this->pwd)||empty($this->pwdRepeat)||empty($this->email)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }
  //control check valid uid
  private function invalidUid(){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }
  //control check valid email
  private function invalidEmail(){
    $result;
    if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }
  //control for matching password
  private function pwdMatch(){
    $result;
    if ($this->pwd !== $this->pwdRepeat) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }
  private function uidTakenCheck(){
    $result;
    if (!$this->checkUser($this->uid, $this->email)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }
}