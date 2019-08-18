<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 7/19/2019
 * Time: 1:37 PM
 */

require_once __DIR__ . "/../../dto/Order.php";
require_once __DIR__ . "/../../dto/OrderDetail.php";
require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../repository/impl/OrderRepositoryImpl.php";
require_once __DIR__ . "/../../repository/impl/OrderDetailsRepositoryImpl.php";
require_once __DIR__ . "/../../bussiness/OrderBO.php";


class OrderBOImpl implements OrderBO
{


    private $orderRepository;
    private $orderDetailRepository;

    public function __construct()
    {
        $this->orderRepository = new OrderRepositoryImpl();
        $this->orderDetailRepository = new OrderDetailsRepositoryImpl;
    }


    public function addOrder(Order $order,OrderDetail $orderDetail ): bool
    {
        $connection = (new DBConnection())->getConnection();
        $this->orderRepository->setConnection($connection);
        $this->orderDetailRepository->setConnection($connection);
        mysqli_autocommit($connection,false);
        if ($this->orderRepository->addOrder($order)){
            if ($this->orderDetailRepository->addOrderDetails($orderDetail)){
                mysqli_commit($connection);
                mysqli_autocommit($connection,true);
                return true;
            }else{
                mysqli_rollback($connection);
                mysqli_autocommit($connection,true);
                return false;

            }
        }else{
            mysqli_rollback($connection);
            mysqli_autocommit($connection,true);
            return false;
        }


    }
}