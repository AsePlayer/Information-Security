<?php

include "db_connect.php";

$new_username = $_GET['username'];
$new_password1= $_GET['password1'];
$new_password2= $_GET['password2'];

echo "<h2>Trying to add new user " . $new_username . " pw = " . $new_password1 . " and " . $new_password2 . "</h2>";

// check if password and confirm password match
if($new_password1 != $new_password2) {
	echo "The passwords do not match!";
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
$sql = "INSERT INTO users (id, username, password) VALUES (null, '$new_username', '$new_password1')";
$result = $mysqli->query($sql) or die (mysqli_error($mysqli));

if($result) {
	echo "Registration Success!";
}
else {
	echo "Something went wrong, registration failed!";
}

echo "<a href= 'index.php'>Return to main</a>";
?>