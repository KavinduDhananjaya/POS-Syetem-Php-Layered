<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 7/19/2019
 * Time: 2:32 PM
 */

require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../dto/OrderDetail.php";
require_once __DIR__ . "/../impl/OrderDetailsRepositoryImpl.php";
require_once __DIR__ . "/../OrderDetailsRepository.php";

class OrderDetailsRepositoryImpl implements OrderDetailsRepository
{
    private $connection;


    public function setConnection(mysqli $connection)
    {

        $this->connection=$connection;
    }

    public function addOrderDetails(OrderDetail $orderDetail): bool
    {
        return ($this->connection->query("insert into orderdetails VALUES (
                '{$orderDetail->getOrderId()}',
                '{$orderDetail->getItemCode()}',
                '{$orderDetail->getQty()}')"
            ))>0;
    }
}