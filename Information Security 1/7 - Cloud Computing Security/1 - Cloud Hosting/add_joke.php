<?php
session_start();

if(!$_SESSION['username']) {
	echo "Only logged in users may access this page. Click <a href='login_form.php'here </a> to login<br>";
	exit;
}

include "db_connect.php";

$new_joke_question = htmlspecialchars($_GET["newjoke"]);
$new_joke_answer = htmlspecialchars($_GET["newanswer"]);
$userid = $_SESSION["userid"];

echo "<h2>Inserting joke $new_joke_question...</h2>";

$stmt = $mysqli->prepare("INSERT INTO jokes_table (JokeID, Joke_question, Joke_answer, users_id) VALUES (null, ?, ?, ?)");
$stmt->bind_param("ssi", $new_joke_question, $new_joke_answer, $userid);
$stmt->execute();


include "search_all_jokes.php";
$stmt->close();
echo "<a href='index.php'>Return to main page</a>"

?>