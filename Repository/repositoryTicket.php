<?php
namespace Ticketsystem\Repository;
/**
 * Klasee repositoryEvent erstellen
 */
class RepositoryTicket{
  private $db;

  public function __construct($db){
    $this->db = $db;
  }

  /**
  * showTicket
  */
  public function showTicket($filter,$fk_sk_id_event=0){
    $return = array();
    if($filter instanceof Tickets){
      $sql = "SELECT * FROM ticketsystem.h_ticket WHERE " .$filter->getWhereclauseTicket($fk_sk_id_event);
      $result = $this->db->query($sql);
      if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
          $t = new Ticket($row["sk_id"],$row["idCustomer"]);
          $return[] = $t;
        }
      }
    }
  return $return;
  }

}
?>
