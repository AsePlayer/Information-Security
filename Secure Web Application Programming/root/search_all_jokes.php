<?php

$sql = "SELECT JokeID, Joke_question, Joke_answer FROM jokes_table";
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