<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 7/19/2019
 * Time: 1:41 PM
 */

require_once __DIR__ . "/../../api/dto/Order.php";
require_once __DIR__ . "/../../api/dto/OrderDetail.php";
require_once __DIR__ . "/../../api/bussiness/impl/OrderBOImpl.php";
?>


<?php

$orderId=$_POST['oid'];
$orderDate=$_POST['orderDate'];
$itemCode=$_POST['itemCode'];
$quantity=$_POST['qty'];
$cid=$_POST['cid'];


$orderBo = new OrderBOImpl();

        $orderObject = new Order(
            $orderId,
            $orderDate,
            $cid);

        $orderDetialObject=new OrderDetail(
            $orderId,
            $itemCode,
            $quantity
        );

        $orderBo->addOrder($orderObject,$orderDetialObject);
?>
