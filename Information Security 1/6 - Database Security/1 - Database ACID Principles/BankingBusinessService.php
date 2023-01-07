<?php
require_once 'Autoloader.php';

class BankingBusinessService
{
    function getCheckingBalance()
    {
        $db = new Database();
        $conn = $db->getConnection();

        $checkingservice = new CheckAccountDataService($conn);
        $balance = $checkingservice->getBalance();

        $conn->close();
        return $balance;
    }

    function getSavingsBalance()
    {
        $db = new Database();
        $conn = $db->getConnection();

        $savingsservice = new SavingAccountDataService($conn);
        $balance = $savingsservice->getBalance();

        $conn->close();
        return $balance;
    }

    function transaction($transfer)
    {
        $db = new Database();
        $conn = $db->getConnection();

        $conn->autocommit(FALSE);
        $conn->begin_transaction();

        $checkingbalance = $this->getCheckingBalance();
        $checking = new CheckAccountDataService($conn);
        $okchecking = $checking->updateBalance($checkingbalance - $transfer);
        
        $savingsbalance = $this->getSavingsBalance();
        $savings = new SavingAccountDataService($conn);
        $oksavings = $savings->updateBalance($savingsbalance + $transfer);

        if($okchecking && $oksavings)
        {
            $conn->commit();
        }
        else {
            $conn->rollback();
        }

        $conn->close();
    }
}