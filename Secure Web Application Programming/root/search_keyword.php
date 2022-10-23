<?php
include "db_connect.php";

$keyword_from_form = $_GET["keyword"];

// Search for mama
echo "<h2>Show all words with the joke '$keyword_from_form'</h2>";
$sql = "SELECT JokeID, Joke_question, Joke_answer FROM jokes_table WHERE Joke_question LIKE '%" .  $keyword_from_form  ."%'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["JokeID"]. " - Joke: " . $row["Joke_question"]. " Punchline: " . $row["Joke_answer"]. "<br>";
  }
} else {
  echo "0 results";
}

?>