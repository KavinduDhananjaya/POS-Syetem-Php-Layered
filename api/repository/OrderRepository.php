<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 7/19/2019
 * Time: 1:40 PM
 */

interface OrderRepository
{

    public function addOrder(Order $order): bool;

    public function setConnection(mysqli $connection);


}