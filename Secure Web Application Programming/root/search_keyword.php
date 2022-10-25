<head>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
  
  <style>
	* {
		font-family:Arial, Helvetica, sans-serrif;
	}
  </style>
</head>


<?php
include "db_connect.php";

$keyword_from_form = $_GET["keyword"];

echo "<h1>Looking for jokes that contain the word '<em>$keyword_from_form</em>'</h1>";
$sql = "SELECT JokeID, Joke_question, Joke_answer, users_id, username 
FROM jokes_table 

JOIN users ON users.id = jokes_table.users_id

WHERE Joke_question LIKE '%" .  $keyword_from_form  ."%'";
$result = $mysqli->query($sql);

?>

<div id="accordion">

<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<h3>" . $row['Joke_question'] . "</h3>";
	  
	  echo "<div><p>" . $row['Joke_answer'] . " - Submitted by User: " . $row['username'] . "</p></div>";
  }
} 
else {
  echo "0 results";
}
?>
</div>
<a href="index.php">Return to main page</a>
