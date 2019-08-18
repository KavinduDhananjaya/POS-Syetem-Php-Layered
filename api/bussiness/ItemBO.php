<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 17/07/2019
 * Time: 13:32
 */

require_once __DIR__ . "/../db/DBConnection.php";
require_once __DIR__ . "/../dto/Item.php";
require_once __DIR__ . "/../repository/impl/ItemRepositoryImpl.php";

interface ItemBO
{


    public function addItem(Item $item): bool;

    public function deleteItem($itemCode): bool;

    public function updateItem(Item $item): bool;

    public function searchItem($itemCode): Item;

    public function getAll(): mysqli_result;

    public function setConnection(mysqli $connection);

}