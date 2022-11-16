<?php
require_once 'Autoloader.php';

$bs = new BankingBusinessService();

$checkbalance = $bs->getCheckingBalance();
$savingbalance = $bs->getSavingsBalance();

echo "Current values:<br>";
echo "Checking balance = " . $checkbalance . "<br>";
echo "Saving balance = " . $savingbalance . "<br>";

echo "<br>Take $100 from Checking and put it into Savings<br><br>";
$bs->transaction(100);

$checkbalance = $bs->getCheckingBalance();
$savingbalance = $bs->getSavingsBalance();

echo "Current values:<br>";
echo "Checking balance = " . $checkbalance . "<br>";
echo "Saving balance = " . $savingbalance . "<br>";