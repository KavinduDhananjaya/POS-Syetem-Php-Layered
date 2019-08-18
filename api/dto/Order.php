<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 7/19/2019
 * Time: 1:39 PM
 */

class Order
{
    private $orderId;
    private $orderDate;
    private $cid;

    /**
     * Order constructor.
     * @param $orderId
     * @param $orderDate
     * @param $cid
     */
    public function __construct($orderId, $orderDate, $cid)
    {
        $this->orderId = $orderId;
        $this->orderDate = $orderDate;
        $this->cid = $cid;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param mixed $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return mixed
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @param mixed $orderDate
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;
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

}