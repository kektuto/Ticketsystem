<?php

/**
* Class Event
**/
class Event(){

  /**
  * Attributes
  **/
  private $evid;
  private $idEvent;
  private $date;
  private $address;
  private $eventName;
  private $ticketlimit;
  private $cathergory;
  private $active;
  private $deleted;
  private $startDate;
  private $endDate;
  private $createdBy;
  private $managedBy;

  /**
  * event constructor
  **/
  public function __constructor($evid=0, $idEvent=0, $date, $address, $eventName, $ticketlimit, $cathergory, $active=ture, $deleted=false, $startDate=date_timestamp_get(date_create()), $endDate=0, $createdBy=$username, $managedBy=$username){
    $this->evid = $evid;
    $this->idEvent = $idEvent;
    $this->date = $date;
    $this->address = $address;
    $this->eventName = $eventName;
    $this->ticketlimit = $ticketlimit;
    $this->cathergory = $cathergory;
    $this->active = $active;
    $this->deleted = $deleted;
    $this->startDate = $startDate;
    $this->endDate = $endDate;
    $this->createdBy = $createdBy;
    $this->managedBy = $managedBy;
  }

  /**
  * Method get $evid
  * return int
  **/
  public function getEvid(){
    return $this->evid;
  }
  /**
  * Method set $evid
  * @param int $evid
  **/
  public function setEvid($evid){
    $this->evid = $evid
  }

  /**
  *Method get Id Event
  *@return mixed
  **/
  public function getIdEvent(){
    return $this->idEvent;
  }
  /**
  * Method set Id Event
  * @param mixed idEvent
  **/
  public function setIdEvent($idEvent){
  $this->idEvent = $idEvent;
  }

  /**
  *Method get Date
  *@return mixed
  **/
  public function getDate(){
    return $this->date;
  }
  /**
  * Method set Date
  * @param mixed date
  **/
  public function setDate($date){
  $this->date = $date;
  }

  /**
  *Method get Address
  *@return mixed
  **/
  public function getAddress(){
    return $this->address;
  }
  /**
  * Method set Address
  * @param mixed address
  **/
  public function setAddress($address){
  $this->address = $address;
  }

  /**
  *Method get Event Name
  *@return mixed
  **/
  public function getEventName(){
    return $this->eventName;
  }
  /**
  * Method set Event Name
  * @param mixed eventName
  **/
  public function setEventName($eventName){
  $this->eventName = $eventName;
  }

  /**
  *Method get Ticketlimit
  *@return mixed
  **/
  public function getTicketlimit(){
    return $this->ticketlimit;
  }
  /**
  * Method set Ticketlimit
  * @param mixed ticketlimit
  **/
  public function setTicketlimit($ticketlimit){
  $this->ticketlimit = $ticketlimit;
  }

  /**
  *Method get Cathergory
  *@return mixed
  **/
  public function getCathergory(){
    return $this->cathergory;
  }
  /**
  * Method set Cathergory
  * @param mixed cathergory
  **/
  public function setCathergory($cathergory){
  $this->cathergory = $cathergory;
  }

  /**
  *Method get Active
  *@return mixed
  **/
  public function getActive(){
    return $this->active;
  }
  /**
  * Method set Active
  * @param mixed active
  **/
  public function setActive($active){
  $this->active = $active;
  }

  /**
  *Method get Deleted
  *@return mixed
  **/
  public function getDeleted(){
    return $this->deleted;
  }
  /**
  * Method set Deleted
  * @param mixed deleted
  **/
  public function setDeleted($deleted){
  $this->deleted = $deleted;
  }

  /**
  *Method get Start Date
  *@return mixed
  **/
  public function getStartDate(){
    return $this->startDate;
  }
  /**
  * Method set Start Date
  * @param mixed startDate
  **/
  public function setStartDate($startDate){
  $this->startDate = $startDate;
  }

  /**
  *Method get End Date
  *@return mixed
  **/
  public function getEndDate(){
    return $this->endDate;
  }
  /**
  * Method set End Date
  * @param mixed endDate
  **/
  public function setEndDate($endDate){
  $this->endDate = $endDate;
  }

  /**
  *Method get Created By
  *@return mixed
  **/
  public function getCreatedBy(){
    return $this->createdBy;
  }
  /**
  * Method set Created By
  * @param mixed createdBy
  **/
  public function setCreatedBy($createdBy){
  $this->createdBy = $createdBy;
  }

  /**
  *Method get Managed By
  *@return mixed
  **/
  public function getManagedBy(){
    return $this->managedBy;
  }
  /**
  * Method set Managed By
  * @param mixed managedBy
  **/
  public function setManagedBy($managedBy){
  $this->managedBy = $managedBy;
  }

}


?>
