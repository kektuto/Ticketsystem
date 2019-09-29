<?php
namespace Ticketsystem\Model;

class Customer extends User{

    private $skidCustomer;
    private $idCustomer;
    private $address;
    private $salutation;
    private $firstName;
    private $lastName;
    private $dataOfBirth;
    private $isVip;

    public function __constructor($skidUser = 0, $idUser = 0, $username, $password, $email, $isAdmin = false, $skidCustomer=0, $idCustomer=0, $address=0, $salutation, $firstName, $lastName, $dataOfBirth, $isVip)
    {
        parent::__constructor($skidUser, $idUser, $username, $password, $email, $isAdmin);
        $this->skidCustomer = $skidCustomer;
        $this->idCustomer = $idCustomer;
        $this->address = $address;
        $this->salutation = $salutation;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dataOfBirth = $dataOfBirth;
        $this->isVip = $isVip;
    }

    /**
     * @return mixed
     */
    public function getSkidCustomer()
    {
        return $this->skidCustomer;
    }

    /**
     * @param mixed $skidCustomer
     */
    public function setSkidCustomer($skidCustomer)
    {
        $this->skidCustomer = $skidCustomer;
    }

    /**
     * @return mixed
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * @param mixed $idCustomer
     */
    public function setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * @param mixed $salutation
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getDataOfBirth()
    {
        return $this->dataOfBirth;
    }

    /**
     * @param mixed $dataOfBirth
     */
    public function setDataOfBirth($dataOfBirth)
    {
        $this->dataOfBirth = $dataOfBirth;
    }

    /**
     * @return mixed
     */
    public function getIsVip()
    {
        return $this->isVip;
    }

    /**
     * @param mixed $isVip
     */
    public function setIsVip($isVip)
    {
        $this->isVip = $isVip;
    }


}