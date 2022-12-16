<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<h1>Time for funny jokes!</h1>
<a href = "login_form.php">Login</a>
<a href = "logout.php">Logout</a>
<a href = "register_new_user.php">Register!</a><br>

<?php

include "db_connect.php";
//include "search_all_jokes.php";
?>


<form class="form-horizontal" action="search_keyword.php">
<fieldset>

<!-- Form Name -->
<legend>Search for a joke</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="keyword">Search Input</label>
  <div class="col-md-5">
    <input id="keyword" name="keyword" type="search" placeholder="e.g. chicken" class="form-control input-md" required="">
    <p class="help-block">Enter a word to search for on the joke database.</p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Search</button>
  </div>
</div>

</fieldset>
</form>



<form class="form-horizontal" action="/add_joke.php">
<fieldset>

<!-- Form Name -->
<legend>Enter a new Joke!</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newjoke">Enter your new joke:</label>  
  <div class="col-md-6">
  <input id="newjoke" name="newjoke" type="text" placeholder="" class="form-control input-md">
  <span class="help-block">Enter the first half of your joke here</span>  
  </div>
</div>


<!-- Text input-->
<div class="form-group" action="/add_joke.php">
  <label class="col-md-4 control-label" for="newanswer">The punchline to your joke</label>  
  <div class="col-md-6">
  <input id="newanswer" name="newanswer" type="text" placeholder="" class="form-control input-md">
  <span class="help-block">Enter in the "answer" or punchline to your joke</span>  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Add a new joke!</button>
  </div>
</div>

</fieldset>
</form>


<?php
//include "search_keyword.php";


$mysqli->close();
?>

</body>

</html>