<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 7/19/2019
 * Time: 1:36 PM
 */

interface OrderBO
{
    public function addOrder(Order $order,OrderDetail $orderDetail): bool;

}