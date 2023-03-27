<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
</head>
<body>
    <?php 
    if (!$_SESSION['login_name']) {
        echo "Sorry. You must login firs tto see this page. <a href='loginform.html'>Login here</a>";
        // stop loading any more content on this page
        exit; 
    }
    ?>
    <h2>Secure page</h2>
    <p>This is a secure page that only logged in users should be able to view.</p>
    <p>If you somehow arrived here without logging in first, you will be charged with illegal entry.</p>
    <p>Thank you -- the government</p>
</body>
</html>