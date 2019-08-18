<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 16/07/2019
 * Time: 21:17
 */

class Customer
{

    private $firstName;
    private $lastName;
    private $cid;
    private $address;
    private $email;
    private $tell;

    /**
     * Customer constructor.
     * @param $firstName
     * @param $lastName
     * @param $cid
     * @param $address
     * @param $email
     * @param $tell
     */
    public function __construct($firstName, $lastName, $cid, $address, $email, $tell)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->cid = $cid;
        $this->address = $address;
        $this->email = $email;
        $this->tell = $tell;
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
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * @param mixed $cid
     */
    public function setCid($cid)
    {
        $this->cid = $cid;
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTell()
    {
        return $this->tell;
    }

    /**
     * @param mixed $tell
     */
    public function setTell($tell)
    {
        $this->tell = $tell;
    }







}