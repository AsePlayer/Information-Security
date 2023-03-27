<?php
// used to track cookies (yum!)
session_start();

// get the values from the submitted form
$attempted_username = $_POST['username'];
$attempted_password = $_POST['pass'];

// define possible login pairs. This would usually come from a database.
$legalLogins = [['admin', 'somepass'], ['vicky', 'pa$$word'], ['me', 'you']];

// assume the login fails first
$loggedin = FALSE;

// compare attempt to all legal pairs of values
foreach($legalLogins as $x) {
    if($x[0] == $attempted_username && $x[1] == $attempted_password) {
        $loggedin = TRUE;
    }
}

if($loggedin) {
    echo "You have logged in as " . $attempted_username . "<br>";
    echo "click <a href='securepage.php'>Here</a> to continue <br>";

    // set cookie to indicate that the login was successful
    $_SESSION['login_name'] = $attempted_username;
} 
else {
    echo "Access denied!";
    // log the person out
    session_destroy();
}
?>