<?php
class LoginContr extends Login{
  private $uid;
  private $pwd;
  
  public function __construct ($uid, $pwd){
    $this->uid = $uid;
    $this->pwd = $pwd;
  }
  //Method that allows us to signup user
  public function loginUser(){
    if ($this->emptyInput() == false) {
      header("location: ../index.php?error=emptyfeild");
      exit();
    }
    $this->getUser($this->uid, $this->pwd);
  }
  
  /*
  form controls for error handler
  */
  //control check empty feilds
  private function emptyInput(){
    $result;
    if (empty($this->uid)||empty($this->pwd)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }
}