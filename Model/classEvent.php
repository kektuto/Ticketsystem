<?php
//namespace Ticketsystem\Model;
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
  private $category;
  private $arrayTickets;
  private $eventLocation;
  private $eventTyp;

  /**
   * event constructor
   * @param int $skid
   * @param int $id
   * @param $date
   * @param $address
   * @param $eventName
   * @param $ticketlimit
   * @param $category
   * @param int $arrayTickets
   * @param int $eventLocation
   * @param int $eventTyp
   */
  public function __construct($skid=0, $id=0, $date=0, $address="", $eventName="", $ticketlimit=0, $category="", $arrayTickets=0, $eventLocation=0, $eventTyp=0){
    $this->skid = $skid;
    $this->id = $id;
    $this->date = $date;
    $this->address = $address;
    $this->eventName = $eventName;
    $this->ticketlimit = $ticketlimit;
    $this->category = $category;
    $this->arrayTickets = $arrayTickets;
    $this->eventLocation = $eventLocation;
    $this->eventTyp = $eventTyp;
  }

  /**
  * Method get $skidUser
  * return int
  **/
  public function getSkid(){
    return $this->skid;
  }
  /**
  * Method set $skidUser
  * @param int $skid
  **/
  public function setSkid($skid){
    $this->skid = $skid;
  }

  /**
  *Method get Id
  *@return mixed idCustomer
  **/
  public function getId(){
    return $this->id;
  }
  /**
  * Method set Id Event
  * @param mixed idCustomer
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
  *Method get $category
  *@return mixed
  **/
  public function getCategory(){
    return $this->$category;
  }
  /**
  * Method set $category
  * @param mixed $category
  **/
  public function setCategory($category){
  $this->category = $category;
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
   * @return mixed
   */
  public function getEventLocation()
  {
    return $this->eventLocation;
  }

  /**
   * @param mixed $eventLocation
   */
  public function setEventLocation($eventLocation)
  {
    $this->eventLocation = $eventLocation;
  }

  /**
   * @return mixed
   */
  public function getEventTyp()
  {
    return $this->eventTyp;
  }

  /**
   * @param mixed $eventTyp
   */
  public function setEventTyp($eventTyp)
  {
    $this->eventTyp = $eventTyp;
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
			$where .= ' AND idCustomer = ' .'"'.$this->getId().'"';
		}
		return $where;
	 }

}


?>
