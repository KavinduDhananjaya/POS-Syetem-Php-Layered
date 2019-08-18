<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 16/07/2019
 * Time: 21:17
 */
require_once __DIR__ . "/../../dto/Customer.php";
require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../repository/CustomerRepository.php";
require_once __DIR__ . "/../../bussiness/CustomerBO.php";

class CustomerBOImpl implements CustomerBO
{


    private $customerRepository;

    /**
     * CustomerBOImpl constructor.
     */
    public function __construct()
    {
        $this->customerRepository = new CustomerRepositoryImpl();
    }

    public function addCustomer(Customer $customer): bool
    {
        $connection = (new DBConnection())->getConnection();
        $this->customerRepository->setConnection($connection);
        return $this->customerRepository->addCustomer($customer);
    }

    public function deleteCustomer($customerID): bool
    {
        $connection = (new DBConnection())->getConnection();
        $this->customerRepository->setConnection($connection);
        return $this->customerRepository->deleteCustomer($customerID);
    }

    public function updateCustomer(Customer $customer): bool
    {
        $connection = (new DBConnection())->getConnection();
        $this->customerRepository->setConnection($connection);
        return $this->customerRepository->updateCustomer($customer);

    }

    public function searchCustomer($customerID): Customer
    {
        $connection = (new DBConnection())->getConnection();
        $this->customerRepository->setConnection($connection);
        return $this->customerRepository->searchCustomer($customerID);
    }

    public function getAll(): mysqli_result
    {
        $connection = (new DBConnection())->getConnection();
        $this->customerRepository->setConnection($connection);
        return $this->customerRepository->getAll();
    }

    public function getAllCustomers(): array
    {
        $connection=(new DBConnection())->getConnection();
        $this->customerRepository->setConnection($connection);
        return $this->customerRepository->getAllCustomer();
    }
}