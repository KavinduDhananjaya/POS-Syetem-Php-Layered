<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 17/07/2019
 * Time: 13:33
 */
require_once __DIR__ . "/../../api/dto/Item.php";
require_once __DIR__ . "/../../api/bussiness/impl/ItemBOImpl.php";

$itemCode=$_POST['itemCode'];
$itemName=$_POST['itemName'];
$price=$_POST['unitPrice'];
$qty=$_POST['quantity'];

$operation=$_POST['operation'];

$itemBO = new ItemBOImpl();

switch ($operation){
    case "searchID":
        $itemBO->searchItem($itemCode);
        ;break;
    case "searchName":"";break;
    case "addItem":
        $itemTempObject = new Item(
            $itemCode,
            $itemName,
            $price,
            $qty);
        echo $itemBO->addItem($itemTempObject);
        break;
    case "updateItem":
        $itemTempObject = new Item(
            $itemCode,
            $itemName,
            $price,
            $qty);
        echo $itemBO->updateItem($itemTempObject);
        break;
    case "deleteItem":"";break;

}

?>