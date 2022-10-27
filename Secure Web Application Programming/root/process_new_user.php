<?php

include "db_connect.php";

$new_username = $_GET['username'];
$new_password1= $_GET['password1'];
$new_password2= $_GET['password2'];

// WARNING: crypt is BAD. use $hashed_password = password_hash($new_password1, PASSWORD_DEFAULT); instead.
// I am not using it because my php version does not support it!

$hashed_password = crypt($new_password1, '$2a$09$mynamejeff$');


echo "<h2>Trying to add new user " . $new_username . " pw = " . $new_password1 . " and " . $new_password2 . "</h2>";

// check if password and confirm password match
if($new_password1 != $new_password2) {
	echo "The passwords do not match!";
	exit;
}

// REGEX Expressions for more secure passwords!
preg_match('/[0-9]+/', $new_password1, $matches);
if(sizeof($matches) == 0) {
	echo "The password must contain at least 1 number<br>";
	exit;
}

preg_match('/[!@#$%^&*()]+/', $new_password1, $matches);
if(sizeof($matches) == 0) {
	echo "The password must contain at least 1 special character like: !@#$%^&*()<br>";
	exit;
}

if(strlen($new_password1) <= 8) { 
	echo "The password must be at least 8 characters long!<br>";
	exit;
}

// check to see if the user already exists
$sql = "SELECT * FROM users where username = '$new_username'";
$result = $mysqli->query($sql) or die (mysqli_error($mysqli));
if($result->num_rows > 0) {
	// username already exists!
	echo "The username " . $new_username . " already exists!";
	exit;
}

// insert a new user if username and password are good!
// $sql = "INSERT INTO users (id, username, password) VALUES (null, '$new_username', '$hashed_password')";

$stmt = $mysqli->prepare("INSERT INTO users (id, username, password) VALUES (null, ?, ?)");
$stmt->bind_param("ss", $new_username, $hashed_password);

$result = $stmt->execute();

if($result) {
	echo "Registration Success!";
}
else {
	echo "Something went wrong, registration failed!";
}

echo "<a href= 'index.php'>Return to main</a>";
?>