<?php

//include 'repositoryTicket.php';

/**
 * Klasee repositoryEvent erstellen
 */
class RepositoryEvent{

	private $db;

	public function __construct($db){
		$this->db = $db;
	}

  /**
  * showEvent
  * $option==0 -> get Events without Tickets
  * $option==1 -> get Events + all Tickets
  */
  public function showEvent($filter, $option=0){
    $return = array();
    if($filter instanceof Event){
      $sql = "SELECT * FROM ticketsystem.h_event WHERE " .$filter->getWhereclauseEvent();
      $result = $this->db->query($sql);
	  print_r("repositoryEvent: ".$sql);
      if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
          if($option==1 && $filter->getSkid()){
            $repositoryTicket = new RepositoryTicket();
            $arrayTickets = $repositoryTicket->showTicket(new Ticket(),$filter->getSkid);
          }
          $e = new Event($row["skid"],$row["id"]);
          $e->setArrayTickets($arrayTickets);
        }
      }
    return $return;
    }
  }

}
?>
