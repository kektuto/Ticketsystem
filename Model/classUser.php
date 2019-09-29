<?php
namespace Ticketsystem\Model;
/**
* Class User
*/
class User{

  /**
  * Attributes
  **/
  private $skidUser;
  private $idCustomer;
  private $username;
  private $password;
  private $email;
  private $isAdmin;


  /**
  * user constructor
  **/
  public function __constructor($skidUser=0, $idUser=0, $username, $password, $email, $isAdmin=false){
    $this->skidUser = $skidUser;
    $this->idCustomer = $idUser;
    $this->username = $username;
    $this->password = $password;
    $this->email = $email;
    $this->isAdmin = $isAdmin;

  }

  /**
  * Method get skidUser
  * return int
  **/
  public function getSkidUser(){
    return $this->skidUser;
  }
  /**
  * Method set skidUser
  * @param int $skidUser
  **/
  public function setSkidUser($skidUser){
    $this->skidUser = $skidUser;
  }

  /**
  * Method get idCustomer
  * return int
  **/
  public function getIdCustomer(){
    return $this->idCustomer;
  }
  /**
  * Method set idCustomer
  * @param int $idCustomer
  **/
  public function setIdCustomer($idCustomer){
    $this->idCustomer = $idCustomer;
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
  * Method get IsAdmin
  * return int
  **/
  public function getIsAdmin(){
    return $this->IsAdmin;
  }
  /**
  * Method set IsAdmin
  * @param int $IsAdmin
  **/
  public function setIsAdmin($IsAdmin){
    $this->IsAdmin = $IsAdmin;
  }
}

?>
