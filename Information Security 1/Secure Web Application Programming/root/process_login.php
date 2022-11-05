<head>

</head>


<?php
session_start();


error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db_connect.php";

// @ hides notices from the user if empty!
@$username = addslashes($_POST['username']);
@$password = addslashes($_POST['password']);

echo "You attempted to login with " . $username . " and " . $password . "<br>";

$stmt = $mysqli->prepare("SELECT id, username, password FROM users where username = ?");
$stmt->bind_param("s", $username);

$stmt->execute();
$stmt->store_result();

$stmt->bind_result($userid, $uname, $pw);

if($stmt->num_rows == 1) {
	echo "i found one person with that username<br>";
	$stmt->fetch();
	// User password_verify in later versions of php
	if(crypt($password, '$2a$09$mynamejeff$') == $pw) {
		echo "The password matches<br>";
		echo 'Login success!<br> <a href="index.php">Return to main page</a>';
		$_SESSION['username'] = $uname;
		$_SESSION['userid'] = $userid;
		exit;
	}
	else {
		$_SESSION = [];
		session_destroy();
	}
}
else
{
	$_SESSION = [];
	session_destroy();
}

echo "<br>Login Failed. <a href = 'index.php'> Return to main page</a>";



echo "SESSION = <pre>";
print_r($_SESSION);
echo "</pre>";

?>
</div>
<a href="index.php">Return to main page</a>
