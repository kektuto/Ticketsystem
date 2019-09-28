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
  private $active;
  private $deleted;
  private $startDate;
  private $endDate;
  private $createdBy;
  private $managedBy;

  /**
  * user constructor
  **/
  public function __constructor($skid=0, $id=0, $username, $password, $email, $phone, $isAdmin=false, $active=ture, $deleted=false, $startDate=date_timestamp_get(date_create()), $endDate=0, $createdBy=$username, $managedBy=$username){
    $this->skid = $skid;
    $this->id = $id;
    $this->username = $username;
    $this->password = $password;
    $this->email = $email;
    $this->phone = $phone;
    $this->isAdmin = $isAdmin;
    $this->active = $active;
    $this->deleted = $deleted;
    $this->startDate = $startDate;
    $this->endDate = $endDate;
    $this->createdBy = $createdBy;
    $this->managedBy = $managedBy;
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
    $this->id = $id;s
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

  /**
  * Method get active
  * return int
  **/
  public function getActive(){
    return $this->active;
  }
  /**
  * Method set active
  * @param int $active
  **/
  public function setActive($active){
    $this->active = $active;
  }

  /**
  * Method get deleted
  * return int
  **/
  public function getDeleted(){
    return $this->deleted;
  }
  /**
  * Method set deleted
  * @param int $deleted
  **/
  public function setDeleted($deleted){
    $this->deleted = $deleted;
  }

  /**
  * Method get startDate
  * return int
  **/
  public function getStartDate(){
    return $this->startDate;
  }
  /**
  * Method set startDate
  * @param int $startDate
  **/
  public function setStartDate($startDate){
    $this->startDate = $startDate;
  }

  /**
  * Method get endDate
  * return int
  **/
  public function getEndDate(){
    return $this->endDate;
  }
  /**
  * Method set endDate
  * @param int $endDate
  **/
  public function setEndDate($endDate){
    $this->endDate = $endDate;
  }

  /**
  * Method get createdBy
  * return int
  **/
  public function getCreatedBy(){
    return $this->createdBy;
  }
  /**
  * Method set createdBy
  * @param int $createdBy
  **/
  public function setCreatedBy($createdBy){
    $this->createdBy = $createdBy;
  }

  /**
  * Method get managedBy
  * return int
  **/
  public function getManagedBy(){
    return $this->managedBy;
  }
  /**
  * Method set managedBy
  * @param int $managedBy
  **/
  public function setManagedBy($managedBy){
    $this->managedBy = $managedBy;
  }

}

?>
