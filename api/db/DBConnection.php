<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 16/07/2019
 * Time: 21:19
 */

class DBConnection
{

    private $host = "localhost";
    private $username = "root";
    private $password = "1234";
    private $database = "mypos3";
    private $port = "3306";

    private $connection;


    public function __construct()
    {
        $this->connection = new mysqli(

            $this->host, $this->username, $this->password, $this->database, $this->port
        );
        if ($this->connection->connect_errno) {

            echo $this->connection->connect_error;
            die();

        }
    }

    public function getConnection()
    {

        return $this->connection;
    }




}