<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 17/07/2019
 * Time: 13:31
 */

require_once __DIR__ . "/../../dto/Item.php";
require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../dto/Item.php";
require_once __DIR__ . "/../../repository/ItemRepository.php";
require_once __DIR__ . "/../../bussiness/ItemBO.php";

class ItemBOImpl implements ItemBO
{

    private $itemRepository;

    /**
     * ItemBOImpl constructor.
     * @param $itemRepository
     */
    public function __construct()
    {
        $this->itemRepository = new ItemRepositoryImpl();
    }


    public function addItem(Item $item): bool
    {
        $connection = (new DBConnection())->getConnection();
        $this->itemRepository->setConnection($connection);
        return $this->itemRepository->addItem($item);
    }

    public function deleteItem($itemCode): bool
    {
        // TODO: Implement deleteItem() method.
    }

    public function updateItem(Item $item): bool
    {
        $connection = (new DBConnection())->getConnection();
        $this->itemRepository->setConnection($connection);
        return $this->itemRepository->updateItem($item);
    }

    public function searchItem($itemCode): Item
    {
        $connection = (new DBConnection())->getConnection();
        $this->itemRepository->setConnection($connection);
        return $this->itemRepository->searchItem($itemCode);
    }

    public function getAll(): mysqli_result
    {
        $connection = (new DBConnection())->getConnection();
        $this->itemRepository->setConnection($connection);
        return $this->itemRepository->getAll();
    }

    public function setConnection(mysqli $connection)
    {
        // TODO: Implement setConnection() method.
    }
}