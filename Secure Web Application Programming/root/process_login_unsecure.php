<head>

</head>


<?php
session_start();


error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db_connect.php";

$username = $_GET['username'];
$password = $_GET['password'];

echo "You attempted to login with " . $username . " and " . $password . "<br>";

$sql = "SELECT id, username, password FROM users WHERE username = '$username' AND password = '$password'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	$userid = $row['id'];
	echo "Login successful!<br>";
	$_SESSION['username'] = $username;
	$_SESSION['userid'] = $userid;
	echo "</div>";
}
else {
	echo "0 results. Nobody with that username and password.";
	$_SESSION = [];
	session_destroy();
	echo "<br><a href = 'index.php'> Return to main page</a>";
}

echo "SESSION = <pre>";
print_r($_SESSION);
echo "</pre>";

?>
</div>
<a href="index.php">Return to main page</a>
