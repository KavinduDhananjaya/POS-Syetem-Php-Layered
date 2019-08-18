<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 16/07/2019
 * Time: 21:18
 */

require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../dto/Customer.php";
require_once __DIR__ . "/../impl/CustomerRepositoryImpl.php";


class CustomerRepositoryImpl implements CustomerRepository
{

    private $connection;

    public function addCustomer(Customer $customer): bool
    {
        $result = ($this->connection->query("insert into Customer VALUES (
                '{$customer->getFirstName()}',
                '{$customer->getLastName()}',
                '{$customer->getCid()}',
                '{$customer->getAddress()}',
                '{$customer->getEmail()}',
                '{$customer->getTell()}')"
        ));

        if ($result > 0) {
            echo "Customer Added Successfully....";
            return $result;
        } else {
            echo "Customer Not Added";
        }

    }

    public function deleteCustomer($customerID): bool
    {
        $result = ($this->connection->query("delete from customer where cid='$customerID'"));
        if ($result) {
            echo "Customer has been Deleted";
            return $result;
        } else {
            echo "Customer has been Not Deleted ";
        }
    }

    public function updateCustomer(Customer $customer): bool
    {
        $result = $this->connection->query
        ("update customer set firstName='{
        $customer->getFirstName()}',
        lastname='{$customer->getLastName()}',
        address='{$customer->getAddress()}',
        email='{$customer->getEmail()}',tell='{$customer->getTell()}' where cid ='{$customer->getCid()}'");

        if ($result) {
            echo "Customer has been Updated";
            return $result;
        } else {
            echo "Customer Not updated";
        }
    }

    public function searchCustomer($customerID): Customer
    {
        $result = ($this->connection->query("select * from customer where cid='$customerID'"));
        return $result;
    }

    public function getAll(): mysqli_result
    {
        $result = $this->connection->query("select * from Customer");
        return $result;
    }

    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }


    public function getAllCustomers(): array
    {
        $result = $this->connection->query("select * from customer");
        return $result->fetch_all();
    }
}