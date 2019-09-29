<?php
namespace Ticketsystem\Model;

class EventLocation
{
    private $skid;
    private $id;
    private $location;

    public function __construct($skid=0, $id=0, $location)
    {
        $this->skid = $skid;
        $this->id = $id;
        $this->location = $location;
    }

    /**
     * @return int
     */
    public function getSkid()
    {
        return $this->skid;
    }

    /**
     * @param int $skid
     */
    public function setSkid($skid)
    {
        $this->skid = $skid;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getWhereclauseEventLocation(){
        $where = "sk_id IS NOT NULL";
        if($this->getSkid()){
            $where = 'sk_id = '.$this->getSkid();
        }
        if($this->getId()){
            $where .= ' AND idCustomer = ' .'"'.$this->getId().'"';
        }
        if($this->getLocation()){
            $where .= ' AND location_name = ' .'"'.$this->getLocation().'"';
        }
        return $where;
    }
}