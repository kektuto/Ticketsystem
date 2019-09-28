<?php
include_once 'classEvent.php';

/**
* Class Ticket
*/
class Ticket{

  /**
  * Attributes
  **/
  private $skid;
  private $id;
  private $sector;
  private $seat;
  private $row;
  private $active;
  private $deleted;
  private $startDate;
  private $endDate;

  public function __constructor($skid=0, $id=0, $status, $sector, $email, $phone, $isAdmin=false, $active=ture, $deleted=false, $startDate=date_timestamp_get(date_create()), $endDate=0, $createdBy=$username, $managedBy=$username){
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
   * Metode getWhereclauseTicket
   */
   public function getWhereclauseTicket($fk_sk_id_event=0){
    $where = "skid IS NOT NULL";
    if($this->getSkid()){
      $where = 'sk_id = '.$this->getSkid();
    }
    if($this->getId()){
      $where .= ' AND id = ' .'"'.$this->getId().'"';
    }
    if($fk_sk_id_event){
      $where .= ' AND $fk_sk_id_event = ' .'"'.$fk_sk_id_event.'"';
    }
    return $where;
   }
}
