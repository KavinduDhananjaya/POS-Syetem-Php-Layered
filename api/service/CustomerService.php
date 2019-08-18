<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 16/07/2019
 * Time: 21:23
 */

?>


<?php
require_once __DIR__ . "/../../api/dto/Customer.php";
require_once __DIR__ . "/../../api/bussiness/impl/CustomerBOImpl.php";


$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$cid = $_POST['cid'];
$address = $_POST['address'];
$email = $_POST['email'];
$tell = $_POST['tell'];

$operation = $_POST['operation'];


$customerBO = new CustomerBOImpl();

switch ($operation) {
    case "searchID":
        "";
        break;
    case "searchName":
        "";
        break;
    case "saveCustomer":
        $customerTempObject = new Customer(
            $firstName,
            $lastName,
            $cid,
            $address,
            $email,
            $tell);
        echo $customerBO->addCustomer($customerTempObject);;
        break;

    case "updateCustomer":
        $customerTempObject = new Customer(
            $firstName,
            $lastName,
            $cid,
            $address,
            $email,
            $tell);
        echo $customerBO->updateCustomer($customerTempObject);;
        break;
    case "deleteCustomer":
        echo $customerBO->deleteCustomer($cid);
        break;

    case "GET":
        $operation = $_GET['operation'];
        switch ($operation) {
            case "getAllCustomers":
                $result = $customerBO->getAllCustomer();
                echo json_encode($result);
        }
        break;

}

?>

