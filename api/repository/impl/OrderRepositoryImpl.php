<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 7/19/2019
 * Time: 1:40 PM
 */

require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../dto/Order.php";
require_once __DIR__ . "/../impl/OrderRepositoryImpl.php";
require_once __DIR__ . "/../OrderRepository.php";

class OrderRepositoryImpl implements OrderRepository
{

    private $connection;

    public function addOrder(Order $order): bool
    {
        return ($this->connection->query("insert into orders VALUES (
                '{$order->getOrderId()}',
                '{$order->getOrderDate()}',
                '{$order->getCid()}')"
            )) > 0;

    }

    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }
}