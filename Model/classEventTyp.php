<?php
namespace Ticketsystem\Model;

class EventTyp
{
    private $skid;
    private $id;
    private $typ;

    public function __construct($skid=0, $id=0, $typ)
    {
        $this->skid = $skid;
        $this->id = $id;
        $this->typ = $this;
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
     * @return EventTyp
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * @param EventTyp $typ
     */
    public function setTyp($typ)
    {
        $this->typ = $typ;
    }

    public function getWhereclauseEventTyp(){
        $where = "sk_id IS NOT NULL";
        if($this->getSkid()){
            $where = 'sk_id = '.$this->getSkid();
        }
        if($this->getId()){
            $where .= ' AND idCustomer = ' .'"'.$this->getId().'"';
        }
        if($this->getTyp()){
            $where .= ' AND event_typ = ' .'"'.$this->getTyp().'"';
        }
        return $where;
    }
}