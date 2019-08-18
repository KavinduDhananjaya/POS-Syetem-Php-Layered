<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 16/07/2019
 * Time: 21:16
 */

require_once __DIR__ . "/../db/DBConnection.php";
require_once __DIR__ . "/../dto/Customer.php";
require_once __DIR__ . "/../repository/impl/CustomerRepositoryImpl.php";

interface CustomerBO
{


    public function addCustomer(Customer $customer): bool;

    public function deleteCustomer($customerID): bool;

    public function updateCustomer(Customer $customer): bool;

    public function searchCustomer($customerID): Customer;

    public function getAll(): mysqli_result ;

    public function getAllCustomers(): array ;



}