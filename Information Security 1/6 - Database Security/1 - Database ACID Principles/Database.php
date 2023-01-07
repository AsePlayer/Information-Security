<?php

class Database
{
    // Credentials for accessing the database
    // TODO: externalize this to an INI file
    private $dbservername = "localhost:3307";
    private $dbusername = "root";
    private $dbpassword = "root";
    private $dbname = "BANKINGDEMO";

    function getConnection()
    {
        // Get and Check connection
        $conn = new mysqli($this->dbservername, $this->dbusername, $this->dbpassword, $this->dbname);
        if($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}
