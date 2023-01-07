<?php
require_once 'Autoloader.php';

class SavingAccountDataService
{
    private $conn;

    function __construct($conn)
    {
        $this->conn = $conn;
    }

    function getBalance()
    {
        // Get a database connection
        // $db = new Database();
        // $conn = $db->getConnection();

        // Run query to get balance
        $sql = "SELECT BALANCE FROM SAVINGS";
        $result = $this->conn->query($sql);

        if($result->num_rows == 0)
        {
            // Nothing found. Return -1
            // $conn->close();
            return -1;
        }
        else {
            // Return balance
            $row = $result->fetch_assoc();
            $balance = $row['BALANCE'];
            // $conn->close();
            return $balance;
        }
    }

    function updateBalance($balance)
    {
        // Get a database connection
        // $db = new Database();
        // $conn = $db->getConnection();

        // Run query to get balance
        $sql = "UPDATE SAVINGS SET BALANCE=$balance";
        $result = $this->conn->query($sql);

        if($result)
        {
            // Update is sucessful
            // $conn->close();
            return 1;
        }
        else {
            // Return balance
            // $conn->close();
            return 0;
        }
    }
}