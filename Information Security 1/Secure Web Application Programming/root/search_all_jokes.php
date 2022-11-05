<?php

$sql = "SELECT JokeID, Joke_question, Joke_answer, users_id FROM jokes_table";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<h3>" . htmlspecialchars($row['Joke_question']) . "</h3>";
	  
	  echo "<div><p>" . htmlspecialchars($row['Joke_answer']) . " submitted by " . htmlspecialchars($row['users_id']) . "</p></div>"; 
  }
} else {
  echo "0 results";
}

?>