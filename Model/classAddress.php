<?php
namespace Ticketsystem\Model;
/**
* Class Address
**/
class Address{

  /**
  * Attributes
  **/
  private $skid;
  private $id;
  private $street;
  private $house_nr;
  private $house_nr_z;
  private $plz;
  private $city;
  private $scd_user;

  /**
  * event constructor
  **/
  public function __constructor($skid=0,$id=0, $street="", $house_nr, $house_nr_z, $plz, $city, $scd_user){
    $this->skid = $skid;
    $this->id = $id;
    $this->street = $street;
    $this->house_nr = $house_nr;
    $this->house_nr_z = $house_nr_z;
    $this->plz = $plz;
    $this->city = $city;
    $this->scd_user = $scd_user;
  }

  /**
  *Method get Id
  *@return mixed
  **/
  public function getId(){
    return $this->id;
  }
  /**
  * Method set Id
  * @param mixed idCustomer
  **/
  public function setId($id){
  $this->id = $id;
  }

  /**
  *Method get Street
  *@return mixed
  **/
  public function getStreet(){
    return $this->street;
  }
  /**
  * Method set Street
  * @param mixed street
  **/
  public function setStreet($street){
  $this->street = $street;
  }

  /**
  *Method get House Nr
  *@return mixed
  **/
  public function getHouseNr(){
    return $this->house_nr;
  }
  /**
  * Method set House Nr
  * @param mixed house_nr
  **/
  public function setHouseNr($house_nr){
  $this->house_nr = $house_nr;
  }

  /**
  *Method get House Nr z
  *@return mixed
  **/
  public function getHouseNrZ(){
    return $this->house_nr_z;
  }
  /**
  * Method set House Nr z
  * @param mixed house_nr_z
  **/
  public function setHouseNrZ($house_nr_z){
  $this->house_nr_z = $house_nr_z;
  }

  /**
  *Method get Plz
  *@return mixed
  **/
  public function getPlz(){
    return $this->plz;
  }
  /**
  * Method set Plz
  * @param mixed plz
  **/
  public function setPlz($plz){
  $this->plz = $plz;
  }

  /**
  *Method get City
  *@return mixed
  **/
  public function getCity(){
    return $this->city;
  }
  /**
  * Method set City
  * @param mixed city
  **/
  public function setCity($city){
  $this->city = $city;
  }

  /**
  *Method get Scd User
  *@return mixed
  **/
  public function getScdUser(){
    return $this->scd_user;
  }
  /**
  * Method set Scd User
  * @param mixed scd_user
  **/
  public function setScdUser($scd_user){
  $this->scd_user = $scd_user;
  }

}
