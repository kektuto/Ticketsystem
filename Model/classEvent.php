<?php

/**
* Class Event
**/
class Event{

  /**
  * Attributes
  **/
  private $skid;
  private $id;
  private $date;
  private $address;
  private $eventName;
  private $ticketlimit;
  private $cathergory;
  private $arrayTickets;

  /**
  * event constructor
  **/
  public function __constructor($skid=0, $id=0, $date, $address, $eventName, $ticketlimit, $cathergory, $arrayTickets=0){
    $this->skid = $skid;
    $this->id = $id;
    $this->date = $date;
    $this->address = $address;
    $this->eventName = $eventName;
    $this->ticketlimit = $ticketlimit;
    $this->cathergory = $cathergory;
    $this->arrayTickets = $arrayTickets;
  }

  /**
  * Method get $skid
  * return int
  **/
  public function getSkid(){
    return $this->skid;
  }
  /**
  * Method set $skid
  * @param int $skid
  **/
  public function setSkid($skid){
    $this->skid = $skid;
  }

  /**
  *Method get Id
  *@return mixed id
  **/
  public function getId(){
    return $this->id;
  }
  /**
  * Method set Id Event
  * @param mixed id
  **/
  public function setId($id){
  $this->id = $id;
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
  *Method get arrayTicket
  *@return mixed $arrayTickets
  **/
  public function getArrayTickets(){
    return $this->arrayTickets;
  }
  /**
  * Method set arrayTickets
  * @param mixed cathergory
  **/
  public function setArrayTickets($arrayTickets){
  $this->arrayTickets = $arrayTickets;
  }

  /**
	 * Metode getWhereclauseEvent
	 */
	 public function getWhereclauseEvent(){
	 	$where = "sk_id IS NOT NULL";
		if($this->getSkid()){
			$where = 'sk_id = '.$this->getSkid();
		}
		if($this->getId()){
			$where .= ' AND id = ' .'"'.$this->getId().'"';
		}
		return $where;
	 }

}


?>
