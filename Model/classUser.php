<?php

/**
* Class User
*/
class User{

  /**
  * Attributes
  **/
  private $skid;
  private $id;
  private $username;
  private $password;
  private $email;
  private $phone;
  private $isAdmin;


  /**
  * user constructor
  **/
  public function __constructor($skid=0, $id=0, $username, $password, $email, $phone, $isAdmin=false){
    $this->skid = $skid;
    $this->id = $id;
    $this->username = $username;
    $this->password = $password;
    $this->email = $email;
    $this->phone = $phone;
    $this->isAdmin = $isAdmin;

  }

  /**
  * Method get skid
  * return int
  **/
  public function getSkid(){
    return $this->skid;
  }
  /**
  * Method set skid
  * @param int $skid
  **/
  public function setSkid($skid){
    $this->skid = $skid;
  }

  /**
  * Method get id
  * return int
  **/
  public function getId(){
    return $this->id;
  }
  /**
  * Method set id
  * @param int $id
  **/
  public function setId($id){
    $this->id = $id;
  }

  /**
  * Method get username
  * return string
  **/
  public function getUsername(){
    return $this->username;
  }
  /**
  * Method set username
  * @param string $username
  **/
  public function setUsername($username){
    $this->username = $username;
  }

  /**
  * Method get password
  * return string
  **/
  public function getPassword(){
    return $this->password;
  }
  /**
  * Method set password
  * @param string $password
  **/
  public function setPassword($password){
    $this->password = $password;
  }

  /**
  * Method get email
  * return string
  **/
  public function getEmail(){
    return $this->email;
  }
  /**
  * Method set email
  * @param string $email
  **/
  public function setEmail($email){
    $this->email = $email;
  }

  /**
  * Method get phone
  * return string
  **/
  public function getPhone(){
    return $this->phone;
  }
  /**
  * Method set phone
  * @param string $phone
  **/
  public function setPhone($phone){
    $this->phone = $phone;
  }

  /**
  * Method get iIsAdmin
  * return int
  **/
  public function getIsAdmin(){
    return $this->iIsAdmin;
  }
  /**
  * Method set iIsAdmin
  * @param int $iIsAdmin
  **/
  public function setIsAdmin($iIsAdmin){
    $this->iIsAdmin = $iIsAdmin;
  }
}

?>
