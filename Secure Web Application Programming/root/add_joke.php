<?php
include "db_connect.php";

$new_joke_question = $_GET["newjoke"];
$new_joke_answer = $_GET["newanswer"];

$new_joke_question = addslashes($new_joke_question);
$new_joke_answer = addslashes($new_joke_answer);

// Search for mama
echo "<h2>Inserting joke $new_joke_question...</h2>";

$sql = "INSERT INTO jokes_table (JokeID, Joke_question, Joke_answer) VALUES (NULL, '$new_joke_question', '$new_joke_answer')";
$result = $mysqli->query($sql) or die("An error has occured");

include "search_all_jokes.php";

?>

<a href="index.php">Return to main page</a>