<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 16/07/2019
 * Time: 21:18
 */
require_once __DIR__ . "/../dto/Customer.php";

interface CustomerRepository
{


    public function addCustomer(Customer $customer): bool;

    public function deleteCustomer($customerID): bool;

    public function updateCustomer(Customer $customer): bool;

    public function searchCustomer($customerID): Customer;

    public function getAll(): mysqli_result ;

    public function setConnection(mysqli $connection);

    public function getAllCustomers(): array ;


}