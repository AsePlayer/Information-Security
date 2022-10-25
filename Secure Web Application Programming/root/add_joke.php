<?php
session_start();

if(!$_SESSION['username']) {
	echo "Only logged in users may access this page. Click <a href='login_form.php'here </a> to login<br>";
	exit;
}

include "db_connect.php";

$new_joke_question = $_GET["newjoke"];
$new_joke_answer = $_GET["newanswer"];
$userid = $_SESSION["userid"];


$new_joke_question = addslashes($new_joke_question);
$new_joke_answer = addslashes($new_joke_answer);

// Search for mama
echo "<h2>Inserting joke $new_joke_question...</h2>";

$sql = "INSERT INTO jokes_table (JokeID, Joke_question, Joke_answer, users_id) VALUES (NULL, '$new_joke_question', '$new_joke_answer', '$userid')";
$result = $mysqli->query($sql) or die("An error has occured");

include "search_all_jokes.php";

?>

<a href="index.php">Return to main page</a>