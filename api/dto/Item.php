<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 17/07/2019
 * Time: 13:32
 */

class Item
{

    private $itemCode;
    private $itemName;
    private $unitPrice;
    private $quantity;

    /**
     * Item constructor.
     * @param $itemCode
     * @param $itemName
     * @param $unitPrice
     * @param $quantity
     */
    public function __construct($itemCode, $itemName, $unitPrice, $quantity)
    {
        $this->itemCode = $itemCode;
        $this->itemName = $itemName;
        $this->unitPrice = $unitPrice;
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getItemCode()
    {
        return $this->itemCode;
    }

    /**
     * @param mixed $itemCode
     */
    public function setItemCode($itemCode)
    {
        $this->itemCode = $itemCode;
    }

    /**
     * @return mixed
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * @param mixed $itemName
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;
    }

    /**
     * @return mixed
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @param mixed $unitPrice
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }




}