<?php
namespace Ticketsystem\Model;

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

  public function __constructor($skid=0, $id=0, $status, $sector, $seat, $row){
    $this->skid = $skid;
    $this->id = $id;
    $this->sector = $sector;
    $this->seat = $seat;
    $this->row = $row;
  }

    /**
     * @return mixed
     */
    public function getSkid()
    {
        return $this->skid;
    }

    /**
     * @param mixed $skid
     */
    public function setSkid($skid)
    {
        $this->skid = $skid;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * @param mixed $sector
     */
    public function setSector($sector)
    {
        $this->sector = $sector;
    }

    /**
     * @return mixed
     */
    public function getSeat()
    {
        return $this->seat;
    }

    /**
     * @param mixed $seat
     */
    public function setSeat($seat)
    {
        $this->seat = $seat;
    }

    /**
     * @return mixed
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * @param mixed $row
     */
    public function setRow($row)
    {
        $this->row = $row;
    }



  /**
   * Metode getWhereclauseTicket
   */
   public function getWhereclauseTicket($fk_sk_id_event=0){
    $where = "skidUser IS NOT NULL";
    if($this->getSkid()){
      $where = 'sk_id = '.$this->getSkid();
    }
    if($this->getId()){
      $where .= ' AND idCustomer = ' .'"'.$this->getId().'"';
    }
    if($fk_sk_id_event){
      $where .= ' AND $fk_sk_id_event = ' .'"'.$fk_sk_id_event.'"';
    }
    return $where;
   }
}
