<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 17/07/2019
 * Time: 13:32
 */
require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../dto/Item.php";
require_once __DIR__ . "/../impl/ItemRepositoryImpl.php";

class ItemRepositoryImpl implements ItemRepository
{

    private $connection;

    public function addItem(Item $item): bool
    {
        $result = ($this->connection->query("insert into item VALUES (
                '{$item->getItemCode()}',
                '{$item->getItemName()}',
                '{$item->getUnitPrice()}',
                '{$item->getQuantity()}')"
        ));

        return $result;
    }

    public function deleteItem($itemCode): bool
    {

        $result = $this->connection->query("delete from Item where itemCode='$itemCode'");
        return $result;
    }

    public function updateItem(Item $item): bool
    {
        $result = $this->connection->query("update item set                 
                ItemName='{$item->getItemName()}',
                UnitPrice='{$item->getUnitPrice()}',
                Quantity='{$item->getQuantity()}'
                where ItemCode='{$item->getItemCode()}'"
        );

        return $result;
    }

    public function searchItem($itemCode): Item
    {
        $result = $this->connection->query("select * from Item where itemCode='$itemCode' ");
        return $result;
    }

    public function getAll(): mysqli_result
    {
        $result = $this->connection->query("select * from Item");
        return $result;
    }

    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }
}