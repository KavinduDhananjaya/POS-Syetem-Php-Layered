<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 7/19/2019
 * Time: 2:30 PM
 */

interface OrderDetailsRepository
{

    public function addOrderDetails(OrderDetail $order): bool;

    public function setConnection(mysqli $connection);


}