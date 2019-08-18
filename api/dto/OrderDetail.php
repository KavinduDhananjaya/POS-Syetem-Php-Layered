<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 7/19/2019
 * Time: 1:39 PM
 */

class OrderDetail
{

    private $orderID;
    private $ItemCode;
    private $qty;

    /**
     * OrderDetail constructor.
     * @param $orderID
     * @param $ItemCode
     * @param $qty
     */
    public function __construct($orderID, $ItemCode, $qty)
    {
        $this->orderID = $orderID;
        $this->ItemCode = $ItemCode;
        $this->qty = $qty;
    }

    /**
     * @return mixed
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * @param mixed $orderID
     */
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
    }

    /**
     * @return mixed
     */
    public function getItemCode()
    {
        return $this->ItemCode;
    }

    /**
     * @param mixed $ItemCode
     */
    public function setItemCode($ItemCode)
    {
        $this->ItemCode = $ItemCode;
    }

    /**
     * @return mixed
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param mixed $qty
     */
    public function setQty($qty)
    {
        $this->qty = $qty;
    }




}