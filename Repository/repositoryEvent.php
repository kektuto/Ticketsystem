<?php
//namespace Ticketsystem\Repository;

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
    $arrayTickets = array();
    if($filter instanceof Event){
      $sql = "SELECT * FROM ticketsystem.h_event WHERE " .$filter->getWhereclauseEvent();
      $result = $this->db->query($sql);
      if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
          $e = new Event($row["sk_id"],$row["id"]);
          if($option==1 && $e->getSkid()){
            $repositoryTicket = new RepositoryTicket($this->db);
            $arrayTickets = $repositoryTicket->showTicket(new Ticket(),$e->getSkid());
          }
          $e->setArrayTickets($arrayTickets);
          $return[] = $e;
        }
      }
    return $return;
    }
  }

}
?>
